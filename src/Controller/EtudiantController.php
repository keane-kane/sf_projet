<?php

namespace App\Controller;
use App\Entity\Etudiant;
use App\Form\EtudiantType;
use App\Repository\EtudiantRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{
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
            $em = $this->getDoctrine()->getManager();
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
    public function afficher(Etudiant $etudiant)
    {
        return $this->render('etudiant/afficher.html.twig', compact('etudiant'));
    }
   
}