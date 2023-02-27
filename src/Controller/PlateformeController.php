<?php

namespace App\Controller;

use App\Repository\ConsoleRepository;
use App\Repository\PlateformeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/plateforme', name: 'plateforme_')]
class PlateformeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(PlateformeRepository $plateformeRepository): Response
    {
        $plateformes = $plateformeRepository->findAll();
        return $this->render('plateforme/index.html.twig', [
          'plateformes' => $plateformes,
        ]);
    }

    #[Route('/{plateformeName}', methods: ['GET'], name: 'show')]
  public function show(string $plateformeName, PlateformeRepository $plateformeRepository, ConsoleRepository $consoleRepository): Response
  {
    $plateforme = $plateformeRepository->findOneByName($plateformeName);
    $consoles = $consoleRepository->findAllByPlateforme($plateforme);


    if (!$plateforme) {
      throw $this->createNotFoundException(
        'Pas de Plateformes avec le nom : ' . $plateformeName . ' trouvé'
      );
    }

    return $this->render('plateforme/show.html.twig', [
      'plateforme' => $plateforme,
      'consoles' => $consoles
    ]);
  }
}
