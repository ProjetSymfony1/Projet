<?php

namespace App\Controller;

use App\Repository\DishRepository;
use http\Env\Response;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MenuController extends AbstractController
{
    /**
     * @param DishRepository $dishRepository
     * @return Response
     */
    public function showAll(DishRepository $dishRepository) : Response
    {
        return $this->render(':homepage:menu.html.twig', [
            "dishes" => $dishRepository->findAll()
        ]);
    }
}

?>