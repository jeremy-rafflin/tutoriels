<?php

namespace App\Controller;

use App\Domaine\PieceLego;
use App\Domaine\Specification\EstUnePieceCarre;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SpecificationController extends AbstractController
{
    #[Route('/specification', name: 'app_specification')]
    public function index(): Response
    {
        $pieceCarre = new PieceLego('gris', 'carre', 2,3,2);

        if ((new EstUnePieceCarre)->isSatisfyBy($pieceCarre)) {
            dd('pièce carré');
        } else {
            dd('pièce non carré');
        }
        return $this->render('specification/index.html.twig', [
            'controller_name' => 'SpecificationController',
        ]);
    }
}
