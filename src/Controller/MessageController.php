<?php

namespace App\Controller;

use App\Entity\Message;
use App\Form\MessageFormType;
use App\Repository\MessageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MessageController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function message(Request $request, EntityManagerInterface $entityManager): Response
    {
	   
		$msg = new Message();
		$form = $this->createForm(MessageFormType::class);
	    $form->handleRequest($request);
		
	
	    if($form->isSubmitted()){
		    $msg->setObject($form->get('object')->getData());
		    $msg->setMessage($form->get('message')->getData());
		    $msg->setCreatedAt(new \DateTimeImmutable());
		    $msg->setIdUser($this->getUser());
		    $msg->setStatus('En cours de traitement');
		    $entityManager->persist($msg);
		    $entityManager->flush();
		    return $this->render('homepage/index.html.twig');
	    }
		
        return $this ->render('user/contact.html.twig', [
			'formMsg' => $form->createView()
        ]);
    }
}
