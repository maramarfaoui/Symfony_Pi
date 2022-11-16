<?php

namespace App\Controller;

use App\Entity\Historiquevente;
use App\Form\HistoriqueventeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/historiquevente')]
class HistoriqueventeController extends AbstractController
{
    #[Route('/', name: 'app_historiquevente_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $historiqueventes = $entityManager
            ->getRepository(Historiquevente::class)
            ->findAll();

        return $this->render('historiquevente/index.html.twig', [
            'historiqueventes' => $historiqueventes,
        ]);
    }

    #[Route('/new', name: 'app_historiquevente_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $historiquevente = new Historiquevente();
        $form = $this->createForm(HistoriqueventeType::class, $historiquevente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($historiquevente);
            $entityManager->flush();

            return $this->redirectToRoute('app_historiquevente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('historiquevente/new.html.twig', [
            'historiquevente' => $historiquevente,
            'form' => $form,
        ]);
    }

    #[Route('/{idvent}', name: 'app_historiquevente_show', methods: ['GET'])]
    public function show(Historiquevente $historiquevente): Response
    {
        return $this->render('historiquevente/show.html.twig', [
            'historiquevente' => $historiquevente,
        ]);
    }

    #[Route('/{idvent}/edit', name: 'app_historiquevente_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Historiquevente $historiquevente, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(HistoriqueventeType::class, $historiquevente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_historiquevente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('historiquevente/update.html.twig', [
            'historiquevente' => $historiquevente,
            'form' => $form,
        ]);
    }

    #[Route('/{idvent}', name: 'app_historiquevente_delete', methods: ['POST'])]
    public function delete(Request $request, Historiquevente $historiquevente, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$historiquevente->getIdvent(), $request->request->get('_token'))) {
            $entityManager->remove($historiquevente);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_historiquevente_index', [], Response::HTTP_SEE_OTHER);
    }
}
