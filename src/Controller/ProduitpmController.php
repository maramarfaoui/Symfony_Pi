<?php

namespace App\Controller;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use App\Entity\Produitpm;
use App\Form\ProduitpmType;
use App\Repository\ProduitpmRepository;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Mime\Email;
use PHPMailer\PHPMailer\SMTP;

/**
 * @Route("/produitpm")
 */
class ProduitpmController extends AbstractController
{
    /**
     * @Route("/afficher ", name="app_produitpm_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $produitpms = $entityManager
            ->getRepository(Produitpm::class)
            ->findAll();

        return $this->render('produitpm/index.html.twig', [
            'produitpms' => $produitpms,
        ]);
    }


    /**
     * @param Request $request
     * @return Response
     * @Route ("/add",name="add" ,methods={"POST","GET"})
     */
    public function add(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer)
    {


        if ($request->request->get('Nomprod') != '') {
            $repository = $entityManager->getRepository(Produitpm::class);
            $Produitpm = $repository->findBy(['nomprod' => $request->request->get('Nomprod')]);
            if (count($Produitpm) == 0) {
                $prd = new Produitpm();
                $prd->setNomprod($request->request->get('Nomprod'));
                $prd->setReferencep($request->request->get('Referencep'));
                $prd->setQuantitep($request->request->get('Quantitep'));
                $prd->setTypep($request->request->get('Type'));
                $prd->setPrixpm($request->request->get('Prixpm'));
                $prd->setDateajoutpm($request->request->get('Dateajoutpm'));
                $em = $this->getDoctrine()->getManager();
                $em->persist($prd);
                $em->flush();

                $mail = new PHPMailer(true);
                $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                $mail->Username = 'abdelmalek.baccar@esprit.tn'; // YOUR gmail email
                $mail->Password = '213JMT7971'; // YOUR gmail password

                // Sender and recipient settings
                $mail->setFrom('abdelmalek.baccar@esprit.tn', 'mali');
                $mail->addAddress('abdelmalek.baccar@esprit.tn', 'Receiver Name');

                // Setting the email content
                $mail->IsHTML(true);
                $mail->Subject = "produit ajouteé";
                $mail->Body = '
<h1>le produit: ' . $request->request->get('Nomprod') . ' ajouteé avec succes </h1>
';
                $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

                $mail->send();
                return $this->redirectToRoute('app_produitpm_index');
            } else {
                return $this->
                render('produitpm/new.html.twig', array(
                    'Nomprod' => $request->request->get('Nomprod'),
                    'Referencep' => $request->request->get('Referencep'),
                    'Quantitep' => $request->request->get('Quantitep'),
                    'Type' => $request->request->get('Type'),
                    'Prixpm' => $request->request->get('Prixpm'),
                    'Dateajoutpm' => $request->request->get('Dateajoutpm'),
                    'message' => 'le produit deja exist'
                ));
            }
        }
        return $this->render('produitpm/new.html.twig');
    }


    /**
     * @Route("/{idprod}/edit", name="app_produitpm_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Produitpm $produitpm, EntityManagerInterface $entityManager): Response
    {

        $form = $this->createForm(ProduitpmType::class, $produitpm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_produitpm_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('produitpm/edit.html.twig', [
            'produitpm' => $produitpm,
            'form' => $form,
        ]);
    }


    /**
     * @route("/recherche",name="recherche" ,methods={"GET","POST"})
     *
     *
     */
    public function recherche(Request $req, EntityManagerInterface $entityManager)
    {
        $data = $req->get('searche');
        $repository = $entityManager->getRepository(Produitpm::class);
        $Produitpm = $repository->findBy(['nomprod' => $data]);

        return $this->render('produitpm/index.html.twig', [
            'produitpms' => $Produitpm
        ]);
    }


    /**
     * @param $id
     * @return Response
     * @Route ("/update/{id}",name="update")
     */
    public function update($id, Request $req, EntityManagerInterface $entityManager)
    {
        $repository = $entityManager->getRepository(Produitpm::class);
        $Produitpm = $repository->findOneBy(['idprod' => $id]);
        return $this->render('produitpm/edit.html.twig', [
            'produitpm' => $Produitpm
        ]);


        /*
        $repo = $this->getDoctrine()->getRepository(Produitpm::class);
        $classroom = $repo->find($id);
        $form = $this->createForm(ProduitpmType::class, $classroom);
        $form->add('Update', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('afficheclasse');
        }
        return $this->render('produitpm/new.html.twig', ['form' => $form->createView()]);*/
    }


    /**
     * @param $id
     * @Route ("/delete/{idprod}",name="delete")
     */
    public function delete($idprod)
    {
        $repo = $this->getDoctrine()->getRepository(Produitpm::class);
        $classroom = $repo->find($idprod);
        $em = $this->getDoctrine()->getManager();
        $em->remove($classroom);
        $em->flush();
        return $this->redirectToRoute('app_produitpm_index');
    }

    /**
     *
     * @Route ("/editprod",name="editprod")
     */
    public function editprod(Request $req, EntityManagerInterface $entityManager)
    {

        $repository = $entityManager->getRepository(Produitpm::class);
        $Produitpm = $repository->findOneBy(['idprod' => $req->get('idprod')]);
        $Produitpm->setNomprod($req->get('Nomprod'));
        $Produitpm->setReferencep($req->get('Referencep'));
        $Produitpm->setQuantitep($req->get('Quantitep'));
        $Produitpm->setType($req->get('Type'));
        $Produitpm->setPrixpm($req->get('Prixpm'));
        $Produitpm->setDateajoutpm($req->get('Dateajoutpm'));
        $entityManager->flush();
        return $this->redirectToRoute('app_produitpm_index');

    }
    /*
        /**
         * @route('/email')
         *//*
    public function sendEmail(MailerInterface $mailer): void
    {

        $email = (new Email())
            ->from('abdelmalek.baccar@esprit.tn')
            ->to('abdelmalek.baccar@esprit.tn')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Time for Symfony Mailer!')
            ->text('Sending emails is fun again!')
            ->html('<p> See Twig integration for better HTML integration! </p>');

       $mailer->send($email);
    }*/

}
