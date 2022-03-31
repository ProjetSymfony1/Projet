<?php

namespace App\Controller;

use App\Entity\Favorite;
use App\Repository\DishRepository;
use App\Repository\FavoriteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FavoriteController extends AbstractController
{
	
	/**
	 * @Route("/favoris", name="favoris")
	 */
	public function menu(FavoriteRepository $favoriteRepository, DishRepository $dishRepository): Response
	{
		return $this->render("user/favorite.html.twig", [
			"favs" => $favoriteRepository->findAll(), "dishes" => $dishRepository->findAll()
		]);
	}
	
	#[Route('/addFavoris', name: 'add-fav')]
	
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
	        $this->addFlash('success', 'Added to favorites !');
        }
        return  $this->render("homepage/menu.html.twig", [
            "dishes" => $dishRepository->findAll()
        ]);
    }
	
	#[Route('/supFavoris', name: 'del-fav')]
	
	public function delFav(FavoriteRepository $favoriteRepository, DishRepository $dishRepository, EntityManagerInterface $entityManager)
	{
		$idFav = $_GET["idFav"];
		$fav = $favoriteRepository->find($idFav);
		$entityManager -> remove($fav);
		$entityManager -> flush();
		$this->addFlash('success', 'Deleted from favorites !');
		
		return $this->redirectToRoute('favoris');
	}

}