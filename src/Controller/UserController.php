<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
   /* #[Route('/user', name: 'user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }*/

    /**
     * @Route("/user/index", name="user-index")
     */
    public function indexUser() :Response{
        return $this->render('user/indexUser.html.twig');
    }

    /**
     * @Route("/user/contactForm", name="user-contactForm")
     */
    public function contactForm() :Response{
        return $this->render('user/formContactUser.html.twig');
    }

    /**
     * @Route("/user/updateInfoClient", name="user-updateForm")
     */
    public function updateForm() :Response{
        return $this->render('user/updateInfoClient.html.twig');
    }

    /**
     * @Route("/user/reservation", name="user-reserver")
     */
    public function reserver() :Response{
        return $this->render('user/reservation.html.twig');
    }
}
