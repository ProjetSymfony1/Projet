<?php

namespace App\Controller;

use App\Entity\dish;
use App\Form\DishFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class AjoutDishController extends AbstractController
{
    public const MENU_ROUTE = 'menu';

    private UrlGeneratorInterface $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    public function onAddictionDishSuccess(Request $request, TokenInterface $token, string $firewallName): ?\Symfony\Component\HttpFoundation\Response
    {
        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }
        return new RedirectResponse($this->urlGenerator->generate('menu'));

    }

    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::MENU_ROUTE);
    }

    #[Route('/ajoutDish', name: 'ajout_dish')]
    public function register(Request $request, EntityManagerInterface $entityManager): Response
    {
        $dish = new Dish();
        $form = $this->createForm(DishFormType::class, $dish);

        $form->handleRequest($request);

        if($form->isSubmitted()){
            $entityManager->persist($dish);
            $entityManager->flush();
            return new RedirectResponse($this->urlGenerator->generate('menu'));
        }

        return $this->render('Dish/ajoutDish.html.twig', [
            'DishForm' => $form->createView(),
        ]);
    }
}