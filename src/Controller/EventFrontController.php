<?php

namespace App\Controller;


use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\EvenementRepository;
use Doctrine\ORM\EntityManagerInterface;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

use PHPMailer\PHPMailer\Exception;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Mime\Email;


#[Route('/ev/front')]
class EventFrontController extends AbstractController
{
    #[Route('/', name: 'app_event_index_front', methods: ['GET'])]
    public function index(EvenementRepository $evenementRepository): Response
    {
        return $this->render('show.html.twig', [
            'evenements' => $evenementRepository->findAll(),
        ]);
    }
    #[Route('/evenement', name: 'app_event_evenement_front', methods: ['GET'])]
    public function evenement(EvenementRepository $evenementRepository): Response
    {
        return $this->render('event_front/front.html.twig', [
            'evenements' => $evenementRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_event_new_b', methods: ['GET', 'POST'])]
    public function new(Request $request, EvenementRepository $evenementRepository, SluggerInterface $slugger): Response
    {

        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $brochureFile = $form->get('image1')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $brochureFile->move(
                        $this->getParameter('personne_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $evenement->setImage1($newFilename);
            }

            $evenementRepository->save($evenement, true);


            return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('event/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form,

        ]);
    }

    #[Route('/{id}', name: 'app_event_show', methods: ['GET'])]
    public function show(Evenement $evenement): Response
    {
        return $this->render('event_front/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }


    #[Route('/{id}/edit', name: 'app_event_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Evenement $evenement, EvenementRepository $evenementRepository): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $evenementRepository->save($evenement, true);

            return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('event/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_event_delete_f', methods: ['POST'])]
    public function delete(Request $request, Evenement $evenement, EvenementRepository $evenementRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getId(), $request->request->get('_token'))) {
            $evenementRepository->remove($evenement, true);
        }

        return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/Achat/{id}', name: 'Achat', methods: ['GET','POST'])]
    public function Achat(Evenement $evenement,$id,Request $req,EntityManagerInterface $entityManager ): Response
    {

        $repository = $entityManager->getRepository(Evenement::class);
        $Evenement = $repository->findOneBy(['id' => $id]);
        $nbtiketrest=$Evenement->getCapaciteEvent('nbr_ticket_achete')-$Evenement->getNbrTicketAchete('capacite_event');
        if($nbtiketrest>=1){
            $nbtiket_total = $Evenement->getNbrTicketAchete('capacite_event') +1;
            $Evenement->setNbrTicketAchete($nbtiket_total);
            $entityManager->flush();

        }
        return $this->redirectToRoute('app_event_evenement_front');
    }
    #[Route('/Reservation/{id}', name: 'Reservetion', methods: ['GET','POST'])]
    public function Reservation  (Evenement $evenement,$id,Request $req,EntityManagerInterface $entityManager,MailerInterface $mailer ): Response
    {

        $repository = $entityManager->getRepository(Evenement::class);
        $Evenement = $repository->findOneBy(['id' => $id]);
        $nbtiketrest=$Evenement->getCapaciteEvent('nbr_ticket_achete')-$Evenement->getNbrTicketAchete('capacite_event');
        $message = "Réservation Effectuée Pour Cet Evenement";
        if($nbtiketrest>=1){
            $nbtiket_total = $Evenement->getNbrTicketAchete('capacite_event') +1;
            $Evenement->setNbrTicketAchete($nbtiket_total);


            $entityManager->flush();

            $mail = new PHPMailer(true);

            $mail->isSMTP();// Set mailer to use SMTP
            $mail->CharSet = "utf-8";// set charset to utf8
            $mail->SMTPAuth = true;// Enable SMTP authentication
            $mail->SMTPSecure = 'tls';// Enable TLS encryption, ssl also accepted

            $mail->Host = 'smtp.gmail.com';// Specify main and backup SMTP servers
            $mail->Port = 587;// TCP port to connect to
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->isHTML(true);// Set email format to HTML

            $mail->Username = 'houssemeddine.mhedhbi@esprit.tn';// SMTP username
            $mail->Password = 'L************';// SMTP password

            $mail->setFrom('houssemeddine.mhedhbi@esprit.tn', 'Admin Evènements');//Your application NAME and EMAIL
            $mail->Subject = 'Nouvelle Réservation De Ticket';//Message subject
            $mail->Body = '<h1>Vous Avez Une Nouvelle Réservation Dans Un Evènement Dont Les Coordonnées sont:<br> Nom Evènement: '.$Evenement->getNomEvent().'<br>
            Adresse Evènement: '.$Evenement->getAdresseEvent() .'<br>
            Type Evènement: '.$Evenement->getTypeEvent().'<br>Catégorie Evènement: '.$Evenement->getCategorieEvent().'<br>
            Nombre De Tickets Achetés:'. $Evenement->getNbrTicketAchete().' <br> Capacité Evènement:'. $Evenement->getCapaciteEvent().'</h1>';// Message body
            $mail->addAddress('houssemeddine.mhedhbi@esprit.tn', 'User Name');// Target email


            $mail->send();


        }
        return $this->redirectToRoute('app_event_evenement_front');
    }
}
