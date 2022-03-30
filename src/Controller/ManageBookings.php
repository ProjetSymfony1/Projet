<?php

namespace App\Controller;


use App\Entity\User;
use App\Entity\Reservation;
use App\Repository\ReservationRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManageBookings extends AbstractController
{


    #[Route('/manageBooking', name: 'manageBookings')]

    public function booking(ReservationRepository $reservationRepository) {

        $id = ($this->getUser())->getId();
        return $this ->render('user/userBooking.html.twig', [
            "bookings" => $reservationRepository->findBy(array('id_user' => $id))
        ]);

    }

    #[Route('/user/delBooking', name: 'delBooking')]

    public function delBooking(ReservationRepository $reservationRepository, EntityManagerInterface $entityManager) {
        $idRez = $_GET["idRez"];
        $rez = $reservationRepository->find($idRez);
        $entityManager -> remove($rez);
        $entityManager -> flush();
        $this->addFlash('success', 'Your booking has been deleted !');
        return $this->booking($reservationRepository);
    }

    #[Route('/admin/adminManageBookings', name: 'adminBookings')]

    public function adminManageBookings(ReservationRepository $reservationRepository, UserRepository $userRepository) {
        $rez = $reservationRepository->findAll();
        $nameArray = array();
        foreach ($rez as $value) {
            $nameArray[] = ($userRepository->findBy(array('id' => $value->getIdUser())))[0]->getIdUser();
        }
        return $this->render("admin/adminManageBookings.html.twig", [
            "rez" => $rez, "username" => $nameArray
        ]);


    }

}