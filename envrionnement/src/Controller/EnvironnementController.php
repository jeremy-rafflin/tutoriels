<?php

namespace App\Controller;

use App\Services\ApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class EnvironnementController extends AbstractController
{
    #[Route('/environnement', name: 'app_environnement')]
    public function index(ApiService $ApiService): JsonResponse
    {
        $ApiService->getApiResult();
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/EnvironnementController.php',
        ]);
    }
}
