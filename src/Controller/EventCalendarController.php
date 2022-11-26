<?php

namespace App\Controller;

use App\Entity\EventCalendar;
use App\Form\EventCalendarType;
use App\Repository\EventCalendarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/ca')]
class EventCalendarController extends AbstractController
{
    #[Route('/', name: 'app_event_calendar_index', methods: ['GET'])]
    public function index(EventCalendarRepository $eventCalendarRepository): Response
    {
        return $this->render('event_calendar/index.html.twig', [
            'event_calendars' => $eventCalendarRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_event_calendar_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EventCalendarRepository $eventCalendarRepository): Response
    {
        $eventCalendar = new EventCalendar();
        $form = $this->createForm(EventCalendarType::class, $eventCalendar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $eventCalendarRepository->save($eventCalendar, true);

            return $this->redirectToRoute('app_event_calendar_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('event_calendar/new.html.twig', [
            'event_calendar' => $eventCalendar,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_event_calendar_show', methods: ['GET'])]
    public function show(EventCalendar $eventCalendar): Response
    {
        return $this->render('event_calendar/show.html.twig', [
            'event_calendar' => $eventCalendar,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_event_calendar_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, EventCalendar $eventCalendar, EventCalendarRepository $eventCalendarRepository): Response
    {
        $form = $this->createForm(EventCalendarType::class, $eventCalendar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $eventCalendarRepository->save($eventCalendar, true);

            return $this->redirectToRoute('app_event_calendar_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('event_calendar/edit.html.twig', [
            'event_calendar' => $eventCalendar,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_event_calendar_delete', methods: ['POST'])]
    public function delete(Request $request, EventCalendar $eventCalendar, EventCalendarRepository $eventCalendarRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$eventCalendar->getId(), $request->request->get('_token'))) {
            $eventCalendarRepository->remove($eventCalendar, true);
        }

        return $this->redirectToRoute('app_event_calendar_index', [], Response::HTTP_SEE_OTHER);
    }
}
