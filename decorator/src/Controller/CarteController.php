<?php

namespace App\Controller;

use App\Carte1\MauvaiseFaconCarteMagic;
use App\CarteOk\CarteMagic;
use App\CarteOk\Decorator\FoilDecorator;
use App\CarteOk\Decorator\ProtegeCarteDecorator;
use App\CarteOk\Decorator\SigneDecorator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class CarteController extends AbstractController
{
    #[Route('/carte', name: 'app_carte')]
    public function index(): JsonResponse
    {

        $carteMagicMauvaisFacon = new MauvaiseFaconCarteMagic(
            5,
            8.3,
            true,
            false,
            true,
            true,
            false
        );

        $carteMagic = new CarteMagic(
            5,
            8.3
        );
        dump([
            $carteMagicMauvaisFacon->prix,
            $carteMagic->prix,
        ]);



        $carteMagicDecore = new FoilDecorator($carteMagic);
        dump('foil',['prix' => $carteMagicDecore->prix, 'dimention' => $carteMagicDecore->dimension]);

        $carteMagicDecore = new FoilDecorator(new SigneDecorator($carteMagic));
        dump('foil + signe',['prix' => $carteMagicDecore->prix, 'prixCalcul' => '(7+4) * 2', 'dimension' => $carteMagicDecore->dimension]);


        $carteMagicDecore = new ProtegeCarteDecorator(new ProtegeCarteDecorator(new FoilDecorator(new SigneDecorator($carteMagic))));
        dump('Double sleeve + foil + signe',[
            'prix' => $carteMagicDecore->prix,
            'prixCalcul' => '(7+4) * 2',
            'dimension' => $carteMagicDecore->dimension,
            'description' => $carteMagicDecore->description()
        ]);




        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/CarteController.php',
        ]);
    }
}
