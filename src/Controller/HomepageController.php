<?php

namespace App\Controller;

use App\createAccount\createAccount;
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
     * @Route("/homeLog", name="homeLog")
     */
    public function homeLog(): Response{
        require_once(createAccount::class);
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $model = new \createAccount();
            if ($model->create()===TRUE){
                return $this->render('homepage/connexionForm.html.twig');
            } else {
                return $this->render('homepage/index1.html.twig');
            }
        }
        return $this->render('homepage/inscriptionForm.html.twig');
    }

    /**
     * @Route("/inscriptionForm", name="inscriptionForm")
     */
    public function register(): Response{
        return $this->render('homepage/inscriptionForm.html.twig');
    }

    /**
     * @Route("/connexionForm", name="connexionForm")
     */
    public function connect(): Response{
        return $this->render('homepage/connexionForm.html.twig');
    }

    /**
     * @Route("/nos-Menu", name="menu")
     */
    public function menu(): Response{
        return $this->render('homepage/menu.html.twig');
    }
}
