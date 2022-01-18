<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
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
        return $this->render('homepage/index1.html.twig');
    }

    /**
     * @Route("/inscriptionForm", name="inscriptionForm")
     */
    public function inscrire(): Response{
        return $this->render('homepage/inscriptionForm.html.twig');
    }

    /**
     * @Route("/connexionForm", name="connexionForm")
     */
    public function connecter(): Response{
        return $this->render('homepage/connexionForm.html.twig');
    }

    /**
     * @Route("/nos-Menu", name="menu")
     */
    public function menu(): Response{
        return $this->render('homepage/menu.html.twig');
    }
}
