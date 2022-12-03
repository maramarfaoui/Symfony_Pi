<?php

namespace App\Controller;

use App\Entity\Like;
use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\LikeRepository;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use phpDocumentor\Reflection\Types\Integer;
use PHPUnit\Util\Filesystem;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Config\Framework\MailerConfig;

use Dompdf\Dompdf;
use Dompdf\Options;
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
    #[Route('/listpdf/{id}', name: 'display_produit_list', methods: ['GET'])]
    public function listpdf(EntityManagerInterface $entityManager, $id):Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $produits = $entityManager
            ->getRepository(Produit::class)
            ->findOneBy(['idprod'=>$id]);


        // Retrieve the HTML generated in our twig file
        $html = $this->render('produit/listHistorique.html.twig',['produit'=>$produits]
        );

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();


        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
        return new Response();
    }
    /**
     * @Route("/triid", name="triid")
     */

    public function Triid(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT c FROM App\Entity\Produit c 
            ORDER BY c.prixprod'
        );


        $produits = $query->getResult();

        return $this->render('produit/index.html.twig',
            array('produits' => $produits));

    }

    #[Route('/pagination/{page?1}/{nbre?3}', name: 'display_produit.pagination')]
    public function pagination(ManagerRegistry $doctrine ,$page,$nbre): Response
    {
        $repository = $doctrine->getRepository(Produit::class);
        $nbProduit = $repository->count([]);

        $nbrePage =ceil($nbProduit / $nbre) ;

           $produits=$repository
            ->findBy([],[],$nbre,($page -1) * $nbre);

        return $this->render('main/shop.html.twig', [
            'produits' => $produits,
            'isPaginated' => true ,
            'nbrePage' => $nbrePage,
            'page'=>$page,
            'nbre' =>$nbre
        ]);
    }
    #[Route('/admin', name: 'display_admin')]

    public function indexAdmin(): Response
    {

        return $this->render('main/front.html.twig'
        );
    }
    #[Route('/portfolioDetails/{idprod}', name: 'app_details')]
    public function details($idprod,ProduitRepository $produitRepository,LikeRepository $likeRepository): Response
    {
        $produit=$produitRepository->findProd($idprod);
        return $this->render('main/portfolio-details.html.twig',['produits'=>$produit]);
    }
    #[Route('/portfolioDetails/{idprod}/like', name: 'app_like_produit',  methods: ['GET', 'POST'])]
    public function likeProduit(EntityManagerInterface $entityManager,$idprod,ProduitRepository $produitRepository,LikeRepository $likeRepository): Response
    {
        $list=$likeRepository->findAll();
        $likes=$likeRepository->find($idprod);
        $produits=$produitRepository->findProd($idprod);
        foreach($produits as $produit){
            $like=new Like();
            $like->setNom("like");
            $produit->addRating($like);
            $likeRepository->add($like,true);
            $entityManager->persist($like);
            $entityManager->flush();

        }

        return $this->render('main/Can.html.twig',['list'=>$list]);
    }
    #[Route('/portfolioDetails/{idprod}/dislike', name: 'app_dislike_offer',  methods: ['GET', 'POST'])]
    public function dislikeOffer(EntityManagerInterface $entityManager,$idprod,ProduitRepository $produitRepository,LikeRepository $likeRepository): Response
    {
        $list=$produitRepository->findAll();
        $imgs=$produitRepository->findByOffre($idprod);
        foreach($imgs as $img){
            $rating=new Like();
            $rating->setRating("dislike");
            $img->getOffreemploi()->addRating($rating);
            $likeRepository->add($rating,true);
            $entityManager->persist($rating);
            $entityManager->flush();
            // On stocke l'image dans la base de données (son nom)
            // $rating->setRating("like");
            //$offreemploi->addRating($rating);
        }

        return $this->render('main/Can.html.twig',['list'=>$list]);
    }

    #[Route('/boutique',name: 'display_aboutique')]
    public function showBoutique(EntityManagerInterface $entityManager): Response
    {
        $produits = $entityManager
            ->getRepository(Produit::class)
            ->findAll();

        return $this->render('main/shop.html.twig', [
            'produits' => $produits,

        ]);

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

