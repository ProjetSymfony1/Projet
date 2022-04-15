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
     * @Route("/{_locale<%app.supported_locales%>}/cart", name="cart")
     */
    public function cart(CartRepository $cartRepository, DishRepository $dishRepository): Response
    {
        return $this->render("user/cart.html.twig", [
            "cart" => $cartRepository->findBy(array("id_user"=>($this->getUser())->getId())),
            "dishes" => $dishRepository->findAll()
        ]);
    }

    #[Route('/{_locale<%app.supported_locales%>}/addCart', name: 'add-cart')]
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
	    $this->addFlash('success', 'Added to cart !');
        $entityManager->flush();

        return $this->render("homepage/menu.html.twig", [
            "cart" => $cartRepository->findBy(array("id_user"=>$idUser)),
            "dishes" => $dishRepository->findAll()
        ]);
    }
	
	#[Route('/{_locale<%app.supported_locales%>}/remove', name: 'remove')]
	public function remove(CartRepository $cartRepository, EntityManagerInterface $entityManager, DishRepository $dishRepository) {
		$idDish = $_GET["idDish"];
		$idCart = $_GET["idCart"];
		$cart = $cartRepository->find($idCart);
		$id_dish = $cart->getIdDish();
		unset($id_dish[$idDish]);
		$cart->setIdDish($id_dish);
		$entityManager -> persist($cart);
		$entityManager -> flush();
		return $this->redirectToRoute('cart');
	}
	
	#[Route('/{_locale<%app.supported_locales%>}/minusDish', name: 'minus')]
	public function minus(CartRepository $cartRepository, EntityManagerInterface $entityManager) {
		$idDish = $_GET["idDish"];
		$idCart = $_GET["idCart"];
		$cart = $cartRepository->find($idCart);
		$id_dish = $cart->getIdDish();
		$id_dish[$idDish] -= 1;
		$cart->setIdDish($id_dish);
		$entityManager -> persist($cart);
		$entityManager -> flush();
		return $this->redirectToRoute('cart');
	}
	
	#[Route('/{_locale<%app.supported_locales%>}/plusDish', name: 'plus')]
	public function plus(CartRepository $cartRepository, EntityManagerInterface $entityManager, DishRepository $dishRepository) {
		$this->addCart($cartRepository, $entityManager, $dishRepository);
		return $this->redirectToRoute('cart');
	}
	
	
}