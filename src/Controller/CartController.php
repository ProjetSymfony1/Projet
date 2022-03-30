<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Repository\CartRepository;
use App\Repository\DishRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    /**
     * @Route("/cart", name="cart")
     */
    public function cart(CartRepository $cartRepository, DishRepository $dishRepository): Response
    {
        return $this->render("user/cart.html.twig", [
            "cart" => $cartRepository->findBy(array("id_user"=>($this->getUser())->getId())),
            "dishes" => $dishRepository->findAll()
        ]);
    }

    #[Route('/addCart', name: 'add-cart')]
    public function addCart(CartRepository $cartRepository, EntityManagerInterface $entityManager, DishRepository $dishRepository): Response
    {
        $idUser = ($this->getUser())->getId();
        $idDish = $_GET["idDish"];

        if ($cartRepository->existOpenCart($idUser) != null)
        {
            $cart = $cartRepository->existOpenCart($idUser)[0];
        } else {
            $cart = new Cart();
            $cart->setIdUser($idUser);
        }
        $cart->addIdDish($idDish);
        $cart->setStatus("open");
        $entityManager->persist($cart);
        $entityManager->flush();

        return $this->render("user/cart.html.twig", [
            "cart" => $cartRepository->findBy(array("id_user"=>$idUser)),
            "dishes" => $dishRepository->findAll()
        ]);
    }
}