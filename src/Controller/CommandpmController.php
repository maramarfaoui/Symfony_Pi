<?php

namespace App\Controller;

use App\Entity\Commandpm;
use App\Entity\Produitpm;
use App\Form\CommandpmType;
use Doctrine\ORM\EntityManagerInterface;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/commandpm")
 */
class CommandpmController extends AbstractController
{
    /**
     * @Route("/", name="app_commandpm_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $commandpms = $entityManager
            ->getRepository(Commandpm::class)
            ->findAll();
        if (isset($_GET['messagess'])) {
            return $this->render('commandpm/index.html.twig', [
                'commandpms' => $commandpms,
                'messagess' => $_GET['messagess']
            ]);
        } else {
            return $this->render('commandpm/index.html.twig', [
                'commandpms' => $commandpms,

            ]);
        }

    }


    /**
     * @param Request $request
     * @return Response
     * @Route ("/add",name="addcm",methods={"POST","GET"})
     */
    public function add(Request $request, MailerInterface $mailer, EntityManagerInterface $entityManager)


    {

        if ($request->request->get('Nomprod') != '') {


            $prdn = $request->request->get('Nomprod');
            $repository = $entityManager->getRepository(Produitpm::class);
            $Produitpm = $repository->findOneBy(['nomprod' => $prdn]);
            $time = strtotime($request->request->get('date'));

            $newformat = date('Y-m-d',$time);
            $qte1 = $Produitpm->getQuantitep();
            if ($qte1 > $request->request->get('quantiteCpm')) {

                $prd = new Commandpm();
                $prd->setIdprod($request->request->get('IDProd'));
                $prd->setNomprod($request->request->get('Nomprod'));
                $prd->setReferencecm($request->request->get('referenceCM'));
                $prd->setDate($newformat);
                $prd->setQuantitecpm($request->request->get('quantiteCpm'));
                $prd->setIduser($request->request->get('iduser'));
                $prd->setType($request->request->get('type'));


                $repository = $entityManager->getRepository(Produitpm::class);
                $Produitpm = $repository->findOneBy(['nomprod' => $prdn]);

                $qte2 = $qte1 - $request->request->get('quantiteCpm');
                $Produitpm->setQuantitep($qte2);
                $entityManager->flush();
                if ($qte2 < 10) {
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
                    $mail->Subject = "alerte";
                    $mail->Body = '
<h1>le produit: ' . $request->request->get('Nomprod') . ' est en alerte de stock </h1>
';


                    $mail->send();
                }
                $em = $this->getDoctrine()->getManager();
                $em->persist($prd);
                $em->flush();
                return $this->redirectToRoute('app_commandpm_index', [
                    'messagess' => $request->request->get('referenceCM'),
                ]);
            } else {
                $repository = $entityManager->getRepository(Produitpm::class);
                $Prod = $repository->findAll('nomprod');
                return $this->
                render('commandpm/new.html.twig', array(
                    'message' => 'la quantite non disponible', 'pdts' => $Prod
                ));
            }
        }
        $repository = $entityManager->getRepository(Produitpm::class);
        $Prod = $repository->findAll('nomprod');
        return $this->render('commandpm/new.html.twig', ['pdts' => $Prod]);
    }

    /**
     * @Route("/commandpm/{idcpm}", name="app_commandpm_show", methods={"GET"})
     */
    public function show(Commandpm $commandpm): Response
    {
        return $this->render('commandpm/show.html.twig', [
            'commandpm' => $commandpm,
        ]);
    }

    /**
     * @Route("/{idcpm}/edit", name="app_commandpm_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Commandpm $commandpm, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CommandpmType::class, $commandpm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_commandpm_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commandpm/edit.html.twig', [
            'commandpm' => $commandpm,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{idcpm}", name="app_commandpm_delete", methods={"POST"})
     */
    public function delete(Request $request, Commandpm $commandpm, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $commandpm->getIdcpm(), $request->request->get('_token'))) {
            $entityManager->remove($commandpm);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_commandpm_index', [], Response::HTTP_SEE_OTHER);
    }
}
