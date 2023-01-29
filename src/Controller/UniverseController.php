<?php
// src/Controller/UniverseController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/universe', name: 'universe_')]
class UniverseController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
      return $this->render('universe/index.html.twig', [
        'zonegaming' => 'Zone Gaming',
     ]);
    }

    #[Route('/{id}', requirements: ['id'=>'\d+'], methods: ['GET'], name: 'show')]
    public function show($id):Response
    {
      return $this->render('universe/show.html.twig', ['id' => $id]);
    }
}
