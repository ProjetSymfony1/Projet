<?php

namespace App\Controller;

use App\createAccount\createAccount;
use App\Repository\DishRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function home(): Response{
        return $this->render('homepage/index.html.twig');
    }
    /**
     * @Route("/index", name="index")
     */
    public function index(): Response{
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
                return $this->render('auth.html.twig');
            } else {
                return $this->render('homepage/index1.html.twig');
            }
        }
        return $this->render('homepage/inscriptionForm.html.twig');
    }

    /**
     * @Route("/register", name="app_register")
     */
    public function register(): Response{
        return $this->render('registration/register.html.twig');
    }

    /**
     * @Route("/login", name="login")
     */
    public function connect(): Response{
        return $this->render('security/auth.html.twig');
    }

    /**
     * @Route("/menu", name="menu")
     */
    public function menu(DishRepository $dishRepository): Response{
        //return $this->render('homepage/menu.html.twig');

        return $this->render("homepage/menu.html.twig", [
            "dishes" => $dishRepository->findAll()
        ]);
    }

    /**
     * @Route("/reserve-non-connexion", name="non-reservation")
     */
    public function nonReservation(): Response{
        return $this->render('homepage/nonReservation.html.twig');
    }

}
