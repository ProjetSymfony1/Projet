<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{

	#[Route('/{_locale<%app.supported_locales%>}/admin/clientData', name: 'clientData')]

	public function getClientData(UserRepository $userRepository) {
		$idUser = $_GET["idUser"];
		return $this->render("admin/clientData.html.twig", [
			"data" => $userRepository->findOneBy(array('id_user' => $idUser))
		]);
}
	
}
