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
class EtudiantController extends AbstractController
{
    public function Matricule($n,$p,$id)
    {
        $n= strtoupper($n[0].$n[1]);
        $p=strtoupper($p[strlen($p)-2].$p[strlen($p)-1]);
        return date('Y', time()).$n.$p.sprintf("%04d", $id);
    }
    /**
     * @Route("/", name="etudiant")
     */
    public function index(Request $request):Response
    {
        $etudiant = new Etudiant();
        $form = $this->createForm(EtudiantType::class,$etudiant);
        // dd($etudiant);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $use = $form["prenom"]->getData();
            $username = $form["nom"]->getData();
            
            
         
            
            $em = $this->getDoctrine()->getManager();
            dd($etudiant->getId());
            $em->persist($etudiant);
           
            $em->flush();
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
        $em = $this->getDoctrine()->getManager();
        $etudiants = $em->getRepository(Etudiant::class)->find($id);
        $form = $this->createForm(EtudiantType::class, $etudiants);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em->flush();
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
        $entityManager = $this->getDoctrine()->getManager();
        $etudiant = $entityManager->getRepository(Etudiant::class)->find($id);
        $entityManager->remove($etudiant);
        $entityManager->flush();
    
        return $this->redirectToRoute("etudiant_afficher");
    }
      
    /**
     * @Route("/etudiant/detail/{id}", name="etudiant_detail")
    */
    public function detail(int $id)
    {
        $entityManager = $this->getDoctrine()->getManager();
      
    
    
        return $this->redirectToRoute("etudiant_afficher");
    }
      
}