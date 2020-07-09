<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantCompletController extends AbstractController
{ 
    /**
     * @Route("/etudiant/complet", name="etudiant_complet")
     */
    public function index()
    {
        return $this->render('etudiant_complet/index.html.twig', [
            'controller_name' => 'EtudiantCompletController',
        ]);
    }
}
