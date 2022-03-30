<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\BookSlotFormType;
use App\Repository\ReservationRepository;
use DateTime;
use DateTimeZone;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ReservationController extends AbstractController
{
    #[Route('/Booking', name: 'app_booking')]
    public function book(Request $request, EntityManagerInterface $entityManager, ReservationRepository $reservationRepository): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(BookSlotFormType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $selectedTimestam = date_timestamp_get($form->get('dateReservation')->getData()) + date_timestamp_get($form->get('timeReservation')->getData());
            $currentTimeStamp = new DateTime('now', new DateTimeZone("Europe/Paris"));
            if($selectedTimestam > ($currentTimeStamp->getTimestamp() + 7200) ) {

                $reservation->setDateReservation($form->get('dateReservation')->getData());
                $reservation->setTimeReservation($form->get('timeReservation')->getData());
                $reservation->setIdUser($this->getUser());
                $reservation->setCreatedAt(new \DateTimeImmutable());
                $reservation->setAvailable(0);
                $entityManager->persist($reservation);
                $entityManager->flush();
                $this->addFlash('success', 'Your table has been booked !');
            }
            else $this->addFlash('notice', 'Your slot is outdated !!');

        }

        return $this->render('reservation/reservation.html.twig', [
            'reservationForm' => $form->createView(),
        ]);
    }


}