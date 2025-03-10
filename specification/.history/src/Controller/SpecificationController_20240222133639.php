<?php

namespace App\Controller;

use App\Domaine\PieceLego;
use App\Domaine\Specification\EstUnePieceCarre;
use App\Domaine\Tour;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SpecificationController extends AbstractController
{
    #[Route('/specification', name: 'app_specification')]
    public function index(): Response
    {
        $pieceCarre = new PieceLego('gris', 'carre', 2,2,2);
        $pieceCarre2 = new PieceLego('gris', 'carre', 15,15,15);
        $pieceCarre3 = new PieceLego('gris', 'carre', 5,5,5);
        $tourCubique = new Tour('gris', 20, 20, 20);

        $tourCubique->ajouterPiece($pieceCarre);


        return $this->render('specification/index.html.twig', [
            'controller_name' => 'SpecificationController',
        ]);
    }
}
