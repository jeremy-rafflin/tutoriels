<?php

namespace App\Controller;

use App\Carte1\MauvaiseFaconCarteMagic;
use App\CarteOk\CarteInterface;
use App\CarteOk\CarteMagic;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class CarteSymfonyController extends AbstractController
{
    public function __construct(CarteInterface $carteMagic)
    {
        dd([$carteMagic,
            'prix' => $carteMagic->prix,
            'dimension' => $carteMagic->dimension,
            'description' => $carteMagic->description()
        ]);
    }
    
    #[Route('/carte_symfony', name: 'app_carte_symfony')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/CarteSymfonyController.php',
        ]);
    }
}
