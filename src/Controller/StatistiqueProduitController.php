<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StatistiqueProduitController extends AbstractController
{
    /**
     * @Route("/statistique/produit", name="app_statistique_produit")
     */
    public function index(): Response
    {
        return $this->render('statistique_produit/index.html.twig', [
            'controller_name' => 'StatistiqueProduitController',
        ]);
    }

    /**
     * @route ("/stat" ,name="stats")
     */
    public function statistique(){
      return $this->render('statistique_produit/stats.html.twig');
    }
}
