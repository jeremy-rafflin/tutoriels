<?php

namespace App\Controller;

use Carte1\MauvaiseFaconCarteMagic;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class CarteController extends AbstractController
{
    #[Route('/carte', name: 'app_carte')]
    public function index(): JsonResponse
    {

        $carteMagic = new MauvaiseFaconCarteMagic(
            5,
            8.3,
            true,
            false,
            true,
            true,
            false
        );
        dump($carteMagic->prix);
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/CarteController.php',
        ]);
    }
}
