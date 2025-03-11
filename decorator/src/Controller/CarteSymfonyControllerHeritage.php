<?php

namespace App\Controller;

use App\CarteOk\CarteMagic as CarteMagicOk;
use App\CarteMoinsBien\CarteMagic;
use App\CarteMoinsBien\Decorator\FoilArcEnCielDecorator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class CarteSymfonyControllerHeritage extends AbstractController
{
    /*public function __construct(CarteMagicOk $carteMagic)
    {
        // Erreur de typage, voir services.yaml
        dd($carteMagic);
    }*/
    public function __construct(FoilArcEnCielDecorator $carteMagic)
    {
        dd([$carteMagic,
            'prix' => $carteMagic->prix,
            'dimension' => $carteMagic->dimension,
            'description' => $carteMagic->description()
        ]);
    }
    
    #[Route('/carte_symfony_heritage', name: 'app_carte_symfony_heritage')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/CarteSymfonyControllerHeritage.php',
        ]);
    }
}
