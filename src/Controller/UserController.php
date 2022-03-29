<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UpdateInfoFormType;
use App\Repository\UserRepository;
use App\Security\AppCustomAuthenticator;
use App\Services\MailerService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

class UserController extends AbstractController
{


    #[Route('/updateInfo', name: 'updateInfo')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, AppCustomAuthenticator $authenticator, EntityManagerInterface $entityManager, MailerService $mailerService): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(UpdateInfoFormType::class, $user);

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
        }

        return $this->render('user/updateInfoClient.html.twig', [
            'updateInfoForm' => $form->createView(),
        ]);
    }

}