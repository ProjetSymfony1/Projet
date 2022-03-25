<?php

namespace App\Controller;

use App\Repository\DishRepository;
use App\Repository\FavoriteRepository;
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
     * @Route("/user/{id}", name="user-homepage")
     */
    public function userhomepage(User $user) :Response{
        return $this->render('user/indexUser.html.twig');
    }

    /**
     * @Route("/favoris", name="favoris")
     */
    public function menu(FavoriteRepository $favoriteRepository, DishRepository $dishRepository): Response
    {
        return $this->render("user/favorite.html.twig", [
            "favs" => $favoriteRepository->findAll(), "dishes" => $dishRepository->findAll()
        ]);
    }
	
}
