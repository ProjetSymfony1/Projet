<?php

namespace App\Controller;

use App\createAccount\createAccount;
use App\Repository\DishRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
	#[Route('/{_locale<%app.supported_locales%>}/', name: 'homepage')]
	
    public function home(): Response{
        return $this->render('homepage/index.html.twig');
    }
	
	#[Route('/{_locale<%app.supported_locales%>}/menu', name: 'menu')]
    public function menu(DishRepository $dishRepository): Response{

        return $this->render("homepage/menu.html.twig", [
            "dishes" => $dishRepository->findAll()
        ]);
    }

    /**
     * @Route("/{_locale<%app.supported_locales%>}/reservation", name="reservation")
     */
    public function book(): Response{
        return $this->render('homepage/booking.html.twig');
    }
	
}
