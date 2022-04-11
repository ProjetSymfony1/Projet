<?php

namespace App\Controller;

use App\Entity\Order;
use App\Repository\CartRepository;
use App\Repository\DishRepository;
use App\Repository\OrderRepository;
use Doctrine\ORM\EntityManagerInterface;
use \Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class OrderController extends AbstractController
{
    #[Route('/makeOrder', name: 'make-order')]
    public function makeOrder(CartRepository $cartRepository, DishRepository $dishRepository): Response
    {
        return $this->render("user/orderConfirmation.html.twig", [
            "cart" => $cartRepository->findBy(array("id_user"=>($this->getUser())->getId())),
            "dishes" => $dishRepository->findAll(), "total" => $_GET["total"]
        ]);
    }

    #[Route('/order', name: 'order')]
    public function order(CartRepository $cartRepository, EntityManagerInterface $entityManager): Response
    {
        $order = new Order();
        $idCart = $_GET["idCart"];
        $cart = $cartRepository->find($idCart);
        $cart->setStatus("close");

        $order->setIdCart($cart);
        $order->setDate(new \DateTimeImmutable());
        $order->setStatus("waiting for confirmation");
        $order->setAmount($_GET["total"]);

        $entityManager->persist($cart);
        $entityManager->persist($order);
        $entityManager->flush();

        $this->addFlash('success', 'Your order is coming soon !');

        return $this->redirectToRoute('homepage');
    }

    #[Route('/showOrder', name: 'show-order')]
    public function showOrder(CartRepository $cartRepository, OrderRepository $orderRepository): Response
    {
        return $this->render("user/orders.html.twig", [
            "cart" => $cartRepository->findBy(array("id_user"=>($this->getUser())->getId())),
            "order" => $orderRepository->findAll()
        ]);
    }

    #[Route('/orderDetail', name: 'order-detail')]
    public function orderDetail(CartRepository $cartRepository, DishRepository $dishRepository): Response
    {
        return $this->render("user/orderData.html.twig", [
            "details" => $cartRepository->findOneBy(array("id_user"=>($this->getUser())->getId(), "id"=>$_GET["idCart"])),
            "dishes" => $dishRepository->findAll()
        ]);
    }
}