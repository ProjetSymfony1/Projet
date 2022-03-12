<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM;

class homepageController extends AbstractController
{
    /* #[Route('/homepage', name: 'homepage')]
     public function index(): Response
     {
         return $this->render('homepage/index.html.twig', [
             'controller_name' => 'HomepageController',
         ]);
     }*/

    /**
     * @Route("/", name="index")
     */
    public function home(): Response{
        return $this->render('homepage/index.html.twig');
    }

    /**
     * @Route("/inscriptionForm", name="inscriptionForm")
     */
    public function inscrire(): Response{
        return $this->render('homepage/signupForm.html.twig');
    }

    /**
     * @Route("/connexionForm", name="connexionForm")
     */
    public function connecter(): Response{
        return $this->render('homepage/connexionForm.html.twig');
    }

    /**
     * @Route("/reserve-non-connexion", name="non-reserver")
     */
    public function pasReserver(): Response{
        return $this->render('homepage/nonReservation.html.twig');
    }

    /**
     * @Route("/nos-Menu", name="menu")
     */
    public function menu(): Response{
        return $this->render('homepage/menu.html.twig');
    }

    /**
     * @Route("/okConnect", name="connexion")
     */
    public function okConnect(): Response{
        $repos = $this->getDoctrine()->getRepository(User::class);
        $pseudo = $repos->find(2);
        return $this->render('homepage/user.html.twig', ['mon_pseudo' =>'pseudo']);
    }

    /**
     * @Route("/contactUs", name="contactUs")
     */
    public function contactUs(): Response{
        return $this->render('homepage/contactUs.html.twig');
    }
}