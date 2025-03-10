<?php

namespace App\Controller;

use App\Domaine\PieceLego;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SpecificationController extends AbstractController
{
    #[Route('/specification', name: 'app_specification')]
    public function index(): Response
    {
        $pieceCarre = new PieceLego('gris', 'carre', 2,3,2);
        if ($pieceCarre->longeur() === $pieceCarre->largeur()) {
            dd('pièce carre');
        }
        return $this->render('specification/index.html.twig', [
            'controller_name' => 'SpecificationController',
        ]);
    }
}
