<?php
// src/Controller/UniverseController.php
namespace App\Controller;

use App\Repository\UniverseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/universe', name: 'universe_')]
class UniverseController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(UniverseRepository $universeRepository): Response
    {
      $universes = $universeRepository->findAll();
      return $this->render('universe/index.html.twig', [
        'universes' => $universes,
     ]);
    }

    #[Route('/{id}', requirements: ['id'=>'\d+'], methods: ['GET'], name: 'show')]
    public function show($id):Response
    {
      return $this->render('universe/show.html.twig', ['id' => $id]);
    }
}
