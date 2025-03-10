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
        $pieceCarre = new PieceLego('gris', 'carre', 1,1,15);
        $piece = new PieceLego('gris', 'carre', 14,14,1);
        $piece2 = new PieceLego('gris', 'carre', 15,15,15);
        $piece3 = new PieceLego('gris', 'carre', 5,5,5);
        $tourCubique = new Tour('gris', 16, 16, 16);

        $tourCubique->ajouterPiece($pieceCarre);
        $tourCubique->ajouterPiece($piece2);
        $tourCubique->ajouterPiece($piece3);


        return $this->render('specification/index.html.twig', [
            'controller_name' => 'SpecificationController',
        ]);
    }
}
