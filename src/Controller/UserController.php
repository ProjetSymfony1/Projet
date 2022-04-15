<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

class UserController extends AbstractController
{
	
	#[Route('/{_locale<%app.supported_locales%>}/myAccount', name: 'account')]
	
	public function myAccount(): Response
	{
		return $this->render("user/account.html.twig");
	
	}
	
    #[Route('/updateInfo', name: 'updateInfo')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, UserRepository $userRepository): Response
    {
	    $user = $this->getUser();
        $form = $this->createForm(RegistrationFormType::class, $user);

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPwduser(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $entityManager->persist($user);
            $entityManager->flush();
			return $this->myAccount();
        }

        return $this->render('user/updateInfoClient.html.twig', [
            'updateInfoForm' => $form->createView(),
        ]);
    }

}