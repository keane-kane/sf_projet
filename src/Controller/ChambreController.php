<?php


namespace App\Controller;
use App\Entity\Chambre;
use App\Form\ChambreType;
use App\Repository\ChambreRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ChambreController extends AbstractController
{
    /**
     * @Route("/chambre", name="chambre_index")
     */
    public function index()
    {
        return $this->render('chambre/index.html.twig', [
            'controller_name' => 'ChambreController',
        ]);
    }
        /**
     * @Route("/chambre/create", name="chambre_create")
     */
   public function create( ChambreRepository  $roomRepository,Request $request):Response
    {
        $room = $roomRepository->findAll();
        $chbre =count($room);
        $chambre = new Chambre();
        $form = $this->createForm(ChambreType::class,$chambre);
        // dd($chambre);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            if($form['Nchambre']->getData()==null){
                $nbat= $form['batiment']->getData();
                $nch= sprintf("%03d", $nbat).sprintf("%04d", $chbre);
                $chambre->setNchambre($nch);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($chambre);
            $em->flush();
            $this->addFlash('success', 'Le chambre a ete bien  enregistree!');
            return $this->redirectToRoute("chambre_create");
        
        }
        return $this->render('chambre/createchambre.html.twig', [
            'form'=> $form->createView(),
            "nbchbre" =>$chbre 
        ]);
    }

    /**
     * @Route("/chambre/afficher", name="chambre_afficher")
    */
    public function afficher(ChambreRepository $chambreRepository, PaginatorInterface $paginator, Request $request)
    {
        $chambre = $chambreRepository->findAll();
        $chambres  = $paginator->paginate(
            $chambre , 
            $request->query->getInt('page', 1),
             3 /*limit per page*/
            );
       // dd($chambres);
        return $this->render('chambre/index.html.twig', compact('chambres'));
    }
    
    /**
     * @Route("/chambre/update/{id}", name="chambre_update")
    */
    public function update(Request $request,int $id)
    {
        $em = $this->getDoctrine()->getManager();
        $chambre = $em->getRepository(Chambre::class)->find($id);
        $form = $this->createForm(ChambreType::class, $chambre);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em->flush();
        }
        return $this->render('chambre/createchambre.html.twig', [
            "form_title" => "Modifier un chambre",
            "form" => $form->createView()
            
        ]);
    }
     
    /**
     * @Route("/chambre/delete/{id}", name="chambre_delete")
    */
    public function delete(int $id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $chambre = $entityManager->getRepository(Chambre::class)->find($id);
        $entityManager->remove($chambre);
        $entityManager->flush();
    
        return $this->redirectToRoute("chambre_afficher");
    }
      

}
