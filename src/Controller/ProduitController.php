<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use PHPUnit\Util\Filesystem;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ProduitController extends AbstractController
{
    #[Route('/', name: 'display_produit', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $produits = $entityManager
            ->getRepository(Produit::class)
            ->findAll();

        return $this->render('produit/index.html.twig', [
            'produits' => $produits,
        ]);
    }
    #[Route('/admin', name: 'display_admin')]

    public function indexAdmin(): Response
    {

        return $this->render('main/front.html.twig'
        );
    }
    #[Route('/boutique',name: 'display_aboutique')]
    public function showBoutique(ProduitRepository $produitRepository): Response
    {

        return $this->render('main/shop.html.twig',
            ["produits"=>$produitRepository]
        );
    }


    #[Route('/addproduit', name: 'addprod', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $produit=$form->getData();
            if($request->files->get('produit')['imagem1']){
                $imagem1 =$request->files->get('produit')['imagem1'];
                $image_name = time().'_'.$imagem1->getClientOriginalName();
                $imagem1->move($this->getParameter('image_directory'),$image_name);
                $produit-> setImagem1($image_name);
            }
            $entityManager->persist($produit);
            $entityManager->flush();
            $this->addFlash('Success','Oeuvre Ajouté avec Success');

            return $this->redirectToRoute('display_produit', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('produit/new.html.twig', [
            'produit' => $produit,
            'form' => $form,
        ]);
    }

    #[Route('/{idprod}', name: 'app_produit_show', methods: ['GET'])]
    public function show(Produit $produit): Response
    {
        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
        ]);
    }

    #[Route('/modifproduit/{id}', name: 'modifprod', methods: ['GET', 'POST'])]
    public function edit(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $produit =$form->getData();
            if($request->files->get('produit')['imagem1']){
                $imagem1 =$request->files->get('produit')['imagem1'];
                $image_name = time().'_'.$imagem1->getClientOriginalName();
                $imagem1->move($this->getParameter('image_directory'),$image_name);
                $produit-> setImagem1($image_name);}

            $entityManager->flush();
            $this->addFlash('Success','Oeuvre Modifié');

            return $this->redirectToRoute('display_produit', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('produit/edit.html.twig', [
            'produit' => $produit,
            'form' => $form,
        ]);
    }

    #[Route('/removeproduit/{id}"', name: 'supp_prod', methods: ['POST'])]
    public function delete( Produit  $produit): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($produit);
        $em->flush();
        $this->addFlash('Success','Oeuvre Supprimé');

        return $this->redirectToRoute('display_produit');


    }




    /**
     * @route("/recherche",name="recherche" ,methods={"GET","POST"})
     *
     *
     */
    public function recherche(Request $req, EntityManagerInterface $entityManager)
    {
        $data = $req->get('searche');
        $repository = $entityManager->getRepository(Produit::class);
        $produits = $repository->findBy(['nomprod' => $data]);
        return $this->render('produit/index.html.twig', [
            'produits' => $produits
        ]);
    }




}

