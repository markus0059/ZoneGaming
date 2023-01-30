<?php
// src/Controller/UniverseController.php
namespace App\Controller;

use App\Repository\PlateformeRepository;
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

  #[Route('/{universeName}', methods: ['GET'], name: 'show')]
  public function show(string $universeName, UniverseRepository $universeRepository, PlateformeRepository $plateformeRepository): Response
  {
    $universe = $universeRepository->findOneByName($universeName);
    $plateformes = $plateformeRepository->findAllByUniverse($universe);


    if (!$universe) {
      throw $this->createNotFoundException(
        'Pas de Univers avec le nom : ' . $universeName . ' trouvé'
      );
    }

    return $this->render('universe/show.html.twig', [
      'universe' => $universe,
      'plateformes' => $plateformes
    ]);
  }
}
