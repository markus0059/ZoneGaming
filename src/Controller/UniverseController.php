<?php
// src/Controller/UniverseController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UniverseController extends AbstractController
{
    #[Route('/universe/', name: 'universe_index')]
    public function index(): Response
    {
      return $this->render('universe/index.html.twig', [
        'zonegaming' => 'Zone Gaming',
     ]);
    }
}
