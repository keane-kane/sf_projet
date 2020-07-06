<?php

namespace App\Controller;

use App\Entity\Batiment;
use App\Form\BatimentType;
use App\Repository\BatimentRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BatimentController extends AbstractController
{
    /**
     * @Route("/batiment", name="batiment")
     */
 
    public function index(Request $request):Response
    {
        $batiment = new Batiment();
        $form = $this->createForm(BatimentType::class,$batiment);
        // dd($batiment);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($batiment);
            $em->flush();
        }
        return $this->render('batiment/index.html.twig', [
             'form'=> $form->createView(),
            
        ]);
    }
     /**
     * @Route("/batiment/afficher", name="batiment_afficher")
    */
    public function afficher(BatimentRepository $batimentRepository)
    {
        $batiments = $batimentRepository->findAll();
        // dd($batiments);
        return $this->render('batiment/affiche_bat.html.twig', compact('batiments'));
    }
  
    /**
     * @Route("/batiment/{id<[0-9]+>}", name="batiment_read")
    */
    public function read(Batiment $batiment)
    {
        return $this->render('batiment/read.html.twig', compact('batiment'));
    }
}
