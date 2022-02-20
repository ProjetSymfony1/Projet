<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /*#[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }*/

    /**
     * @Route("/AdminIndex", name="indexAdmin")
     */
    public function index():Response{
        return $this->render('admin/indexAdmin.html.twig');
    }

    /**
     * @Route("/ajout-compte-admin", name="ajoutAdmin")
     */
    public function addAdmin():Response{
        return $this->render('admin/form/ajoutCompteAdmin.html.twig');
    }

    /**
     * @Route("/ajout-creneau", name="ajoutCreneau")
     */
    public function addCreneau(): Response{
        return $this->render('admin/form/ajoutCreneauForm.html.twig');
    }
}
