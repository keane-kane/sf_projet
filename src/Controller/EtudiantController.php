<?php

namespace App\Controller;
use App\Entity\Etudiant;
use App\Form\EtudiantType;
use App\Repository\EtudiantRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface ;
class EtudiantController extends AbstractController
{

    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    public function Matricule($n,$p,$id)
    {
        $n= strtoupper($n[0].$n[1]);
        $p=strtoupper($p[strlen($p)-2].$p[strlen($p)-1]);
        return date('Y', time()).$n.$p.sprintf("%04d", $id);
    }

    /**
     * @Route("/", name="etudiant")
     */
    public function index(Request $request, EtudiantRepository $etudiantRepository):Response
    {
        $nbetud = $etudiantRepository->findAll(); 
        $lastMat= count($nbetud);
        $etudiant = new Etudiant();
       
        $form = $this->createForm(EtudiantType::class,$etudiant);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $p= $form["prenom"]->getData();
            $n= $form['nom']->getData();
            $id =  $lastMat+1;
            $matricule = $this->Matricule($n,$p,$id);
            $etudiant->setMatricule($matricule);

            $this->em->persist($etudiant);
            $this->em->flush();
            
            $this->addFlash('success', 'L\'etudiant a ete bien  enregistre!');
            return $this->redirectToRoute("etudiant");
            // dd( $session->get('id'));
        }
        return $this->render('etudiant/createetudiant.html.twig', [
             'form'=> $form->createView()
        ]);
    }
    /**
     * @Route("/etudiant", name="etudiant_afficher")
     */
    public function afficher(EtudiantRepository $etudiantRepository,  PaginatorInterface $paginator, Request $request)
    {
        $blogPosts = $etudiantRepository->findAll(); 
          $etudiants = $paginator->paginate(
            $blogPosts , 
            $request->query->getInt('page', 1),
             3 /*limit per page*/
            );
        return $this->render('etudiant/afficher.html.twig', compact('etudiants'));
    }
     /**
     * @Route("/etudiant/update/{id}", name="etudiant_update")
    */
    public function update(Request $request,int $id)
    {
        $etudiants = $this->em->getRepository(Etudiant::class)->find($id);
        $form = $this->createForm(EtudiantType::class, $etudiants);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $this->em->flush();
        }
        return $this->render('etudiant/createetudiant.html.twig', [
            "form_title" => "Modifier un etudiant",
            "form" => $form->createView(),
        ]);
    }
     
    /**
     * @Route("/etudiant/delete/{id}", name="etudiant_delete")
    */
    public function delete(int $id)
    {
        $etudiant = $this->em->getRepository(Etudiant::class)->find($id);
        $this->em->remove($etudiant);
        $this->em->flush();
        return $this->redirectToRoute("etudiant_afficher");
    }
      
    /**
     * @Route("/etudiant/detail/{id}", name="etudiant_detail")
    */
    public function detail(EtudiantRepository $etudiantRepository,Request $request, int $id)
    {
        $etudiant =$etudiantRepository->find($id);
       //dd(compact('etudiant'));
      
        return $this->render('etudiant/detail.html.twig',compact('etudiant'));
       
    }
      
}