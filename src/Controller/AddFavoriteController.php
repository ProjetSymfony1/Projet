<?php

namespace App\Controller;

use App\Entity\Favorite;
use App\Repository\DishRepository;
use App\Repository\FavoriteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddFavoriteController extends AbstractController
{
    #[Route('/ajoutFavoris', name: 'add-fav')]
    public function addFav(DishRepository $dishRepository, EntityManagerInterface $entityManager, ManagerRegistry $registry): Response
    {
        $idDish = $_GET["idDish"];
        $idUser = ($this->getUser())->getId();
        if ((new FavoriteRepository($registry))->findByIds($idUser, $idDish) == null)
        {
            $fav = new Favorite();
            $fav->setDishFav(intval($idDish));
            $fav->setUserDish($idUser);
            $entityManager->persist($fav);
            $entityManager->flush();
        }
        return  $this->render("homepage/menu.html.twig", [
            "dishes" => $dishRepository->findAll()
        ]);
    }
}