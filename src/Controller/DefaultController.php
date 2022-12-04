<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="app_default")
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     *
     * @Route ("/getdata",name="getdata")
     */
    public function getdata(EntityManagerInterface $entityManager)
    {
        $monthes = array();
        $datatab = array();


        for ($i = 0; $i < 7; $i++) {

            $t = $i ;
            $ii = $t + 1;
            $month = date("m", strtotime("-". $t ."months"));
            $year = date("Y", strtotime("-". $t ."months"));
            $jours= date("t", strtotime("-". $t ."months"));
            $date1="".$year."-".$month."-01 00:00:00";
            $date2="".$year."-".$month."-".$jours." 00:00:00";
            $query = $entityManager->createQuery('SELECT c FROM App\Entity\Commandpm c WHERE c.date BETWEEN :dat1 AND :dat2')
                ->setParameter('dat2', $date2)->setParameter('dat1', $date1);
            $tab = $query->getResult();
            $counttab = count($tab);
/*
            var_dump($th).'1<br>';
            var_dump($nx).'2<br>';
            var_dump($tab).'3<br>';*/
            array_push($monthes, $month);
            array_push($datatab, $counttab);
        }

        $response = new JsonResponse(['datatab' => $datatab ,'monthes' => $monthes

            ]);
        return $response;


    }
}
