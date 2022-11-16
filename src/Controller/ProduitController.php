<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;


class ProduitController extends AbstractController
{
    /**
     * @Route("/", name="display_produit")
     */
    public function index(): Response
    {

        $blogs = $this->getDoctrine()->getManager()->getRepository(Produit::class)->findAll();
        return $this->render('produit/index.html.twig', [
            'b'=>$blogs
        ]);
    }
    /**
     * @Route("/admin", name="display_admin")
     */
    public function indexAdmin(): Response
    {

        return $this->render('main/front.html.twig'
        );
    }


    /**
     * @Route("/addproduit", name="addprod")
     */
    public function addProduit(Request $request ,SluggerInterface $slugger): Response
    {
        $produit = new Produit();

        $form = $this->createForm(ProduitType::class,$produit);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $imagem1 = $form->get('imagem1')->getData();

            if ($imagem1) {
                $originalFilename = pathinfo($imagem1->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imagem1->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $imagem1->move(
                        $this->getParameter('produit_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }
                $produit->setImagem1($newFilename);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);//Add
            $em->flush();

            return $this->redirectToRoute('display_produit');
        }
        return $this->render('produit/new.html.twig',['form'=>$form->createView()]);




    }

    #[Route('/{idprod}', name: 'app_produit_show', methods: ['GET'])]
    public function show(Produit $produit): Response
    {
        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
        ]);
    }

    /**
     * @Route("/modifproduit/{id}", name="modifprod")
     */
    public function modifProduit(Request $request,$id): Response
    {
        $produit = $this->getDoctrine()->getManager()->getRepository(Produit::class)->find($id);

        $form = $this->createForm(ProduitType::class,$produit);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('display_produit');
        }
        return $this->render('produit/update.html.twig',['form'=>$form->createView()]);




    }

    /**
     * @Route("/removeproduit/{id}", name="supp_prod")
     */
    public function suppressionProduit(Produit  $produit): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($produit);
        $em->flush();

        return $this->redirectToRoute('display_produit');


    }
}
