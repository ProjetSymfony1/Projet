<?php

namespace App\Controller;

use App\Entity\dish;
use App\Form\DishFormType;
use App\Repository\DishRepository;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use \Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;


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
	
	#[Route('/addDish', name: 'add-dish')]
	public function add(Request $request, EntityManagerInterface $entityManager, DishRepository $dishRepository): Response
	{
        $dish = new dish();
		$form = $this->createForm(DishFormType::class, $dish);
		
		$form->handleRequest($request);
		if($form->isSubmitted()){

               $file = $dish->getPhoto();
               $fileName = 'image/'.uniqid().'.'.$file->guessExtension();
               $file->move($this->getParameter('file_directory'), $fileName);
               $dish->setPhoto($fileName);

			$dish->setArchived(false);
			$entityManager->persist($dish);
			$entityManager->flush();
            $this->addFlash('success', 'New dish added !');
			return $this->menu($dishRepository);
        }
		
		return $this->render('Dish/ajoutDish.html.twig', [
			'DishForm' => $form->createView(),
            'updateMode' => $dish->getId() !== null
		]);
	}

    #[Route('/updateDish', name: 'update-dish')]
    public function update(Request $request, EntityManagerInterface $entityManager,DishRepository $dishRepository): Response{
        $idDish = $_GET["idDish"];
        $dish = $dishRepository->find($idDish);

        $form = $this->createForm(DishFormType::class, $dish);

        $form->handleRequest($request);
        if($form->isSubmitted()){

            $file = $dish->getPhoto();
            $fileName = 'image/'.uniqid().'.'.$file->guessExtension();
            $file->move($this->getParameter('file_directory'), $fileName);
            $dish->setPhoto($fileName);

            $dish->setArchived(false);
            $entityManager->persist($dish);
            $entityManager->flush();
            $this->addFlash('success', 'update success !');
            return $this->menu($dishRepository);
        }

        return $this->render('Dish/ajoutDish.html.twig', [
            'DishForm' => $form->createView(),
            'updateMode' => $dish->getId() !== null
        ]);
    }

	#[Route('/delDish', name: 'del-dish')]
	public function del(DishRepository $dishRepository, EntityManagerInterface $entityManager) {
		$idDish = $_GET["idDish"];
		$dish = $dishRepository->find($idDish);
		$dish->setArchived(true);
		$entityManager -> persist($dish);
		$entityManager -> flush();
		$this->addFlash('success', 'Dish deleted !');
		
		return $this->redirectToRoute('menu');
	}
}

?>