<?php

namespace App\Controller;

use App\Entity\dish;
use App\Form\DishFormType;
use App\Repository\DishRepository;
use Doctrine\ORM\EntityManagerInterface;
use \Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class MenuController extends AbstractController
{
    /**
     * @param DishRepository $dishRepository
     * @return Response
     */

    public function menu(DishRepository $dishRepository) : Response
    {
        return $this->render('homepage/menu.html.twig', [
            "dishes" => $dishRepository->findAll()
        ]);
    }
	
	#[Route('/addDish', name: 'add_dish')]
	public function add(Request $request, EntityManagerInterface $entityManager, DishRepository $dishRepository): \Symfony\Component\HttpFoundation\Response
	{
		$dish = new Dish();
		$form = $this->createForm(DishFormType::class, $dish);
		
		$form->handleRequest($request);
		
		if($form->isSubmitted()){
			$entityManager->persist($dish);
			$entityManager->flush();
			return $this->menu($dishRepository);
        }
		
		return $this->render('Dish/ajoutDish.html.twig', [
			'DishForm' => $form->createView(),
		]);
	}
}

?>