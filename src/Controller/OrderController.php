<?php

namespace App\Controller;

use App\Entity\Order;
use App\Repository\CartRepository;
use App\Repository\DishRepository;
use App\Repository\OrderRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use \Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class OrderController extends AbstractController
{
    #[Route('/{_locale<%app.supported_locales%>}/makeOrder', name: 'make-order')]
    public function makeOrder(CartRepository $cartRepository, DishRepository $dishRepository): Response
    {
        return $this->render("user/orderConfirmation.html.twig", [
            "cart" => $cartRepository->findBy(array("id_user"=>($this->getUser())->getId())),
            "dishes" => $dishRepository->findAll(), "total" => $_GET["total"]
        ]);
    }

    #[Route('/{_locale<%app.supported_locales%>}/order', name: 'order')]
    public function order(CartRepository $cartRepository, EntityManagerInterface $entityManager): Response
    {
        $order = new Order();
        $idCart = $_GET["idCart"];
        $cart = $cartRepository->find($idCart);
        $cart->setStatus("close");

        $order->setIdCart($cart);
        $order->setDate(new \DateTimeImmutable());
        $order->setStatus("Pending confirmation");
        $order->setAmount($_GET["total"]);

        $entityManager->persist($cart);
        $entityManager->persist($order);
        $entityManager->flush();

        $this->addFlash('success', 'Your order is coming soon !');

        return $this->redirectToRoute('homepage');
    }

    #[Route('/{_locale<%app.supported_locales%>}/showOrder', name: 'show-order')]
    public function showOrder(CartRepository $cartRepository, OrderRepository $orderRepository): Response
    {
        return $this->render("user/orders.html.twig", [
            "cart" => $cartRepository->findBy(array("id_user"=>($this->getUser())->getId())),
            "order" => $orderRepository->findAll()
        ]);
    }

    #[Route('/{_locale<%app.supported_locales%>}/orderDetail', name: 'order-detail')]
    public function orderDetail(CartRepository $cartRepository, DishRepository $dishRepository): Response
    {
			return $this->render("user/orderData.html.twig", [
				"details" => $cartRepository->findOneBy(array("id_user"=>$_GET["idUser"], "id"=>$_GET["idCart"])),
				"dishes" => $dishRepository->findAll()
			]);
    
    }

	#[Route('/{_locale<%app.supported_locales%>}/admin/orders', name: 'orders')]

	public function getOrders(OrderRepository $orderRepository, UserRepository $userRepository, CartRepository $cartRepository): Response
	{
		$orders = $orderRepository->findAll();
		$carts = array();
		$buyers = array();
		
		foreach ($orders as $order) {
			$carts[] = $cartRepository->findBy(array('id' => $order->getIdCartInt()));
		}
		
		foreach ($carts as $cart) {
			$buyers[] = $userRepository->findBy(array('id' => $cart[0]->getIdUser()));
		}
		
		return $this->render("admin/adminOrders.html.twig", [
			"orders" => $orders, "buyers" => $buyers, "carts" => $carts
		]);
		
	}

    #[Route('/{_locale<%app.supported_locales%>}/cancelOrder', name: 'cancel-order')]
    public function cancelOrder(EntityManagerInterface $entityManager, OrderRepository $orderRepository): Response
    {
        $orderId = $_GET["orderId"];
        $order = $orderRepository->find($orderId);
        $order->setStatus("Cancelled");

        $entityManager->persist($order);
        $entityManager->flush();

        return $this->redirectToRoute('show-order');
    }

    #[Route('/{_locale<%app.supported_locales%>}/confirmOrder', name: 'confirm-order')]
    public function confirmOrder(EntityManagerInterface $entityManager, OrderRepository $orderRepository): Response
    {
        $orderId = $_GET["orderId"];
        $order = $orderRepository->find($orderId);
        if ($order->getStatus() == "Pending confirmation") {
            $order->setStatus("Confirmed");
        }

        $entityManager->persist($order);
        $entityManager->flush();

        return $this->redirectToRoute('orders');
    }

}