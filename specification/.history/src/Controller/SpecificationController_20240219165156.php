<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SpecificationController extends AbstractController
{
    #[Route('/specification', name: 'app_specification')]
    public function index(): Response
    {
        return $this->render('specification/index.html.twig', [
            'controller_name' => 'SpecificationController',
        ]);
    }
}
