<?php

namespace App\Controller;


use App\Entity\User;
use App\Entity\Reservation;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManageBookings extends AbstractController
{
    #[Route('/manageBooking', name: 'manageBookings')]
    public function message(Request $request, EntityManagerInterface $entityManager): Response
    {

        return $this ->render('user/userBooking.html.twig');
    }


}
