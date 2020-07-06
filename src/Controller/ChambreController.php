<?php

namespace App\Controller;
namespace App\Controller;
use App\Entity\Chambre;
use App\Form\ChambreType;
use App\Repository\ChambreRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ChambreController extends AbstractController
{
    /**
     * @Route("/chambre", name="chambre")
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
   public function create(Request $request):Response
    {
    $chambre = new Chambre();
    $form = $this->createForm(ChambreType::class,$chambre);
    // dd($chambre);
    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()){
        $em = $this->getDoctrine()->getManager();
        $em->persist($chambre);
        $em->flush();
    }
    return $this->render('chambre/createchambre.html.twig', [
         'form'=> $form->createView()
    ]);
}

}
