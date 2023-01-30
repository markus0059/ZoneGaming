<?php

namespace App\DataFixtures;

use App\Entity\Plateforme;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class PlateformeFixtures extends Fixture implements DependentFixtureInterface
{
  public const PLATEFORMES = [
    [
      "Nintendo-old",
      "NintendoLogo_Red.png",
      "backgroundNintendo.png",
      "universe_Retrogaming"
    ],
    [
      "Playstation-old",
      "PlaystationLogoOld.png",
      "backgroundPlaystation.png",
      "universe_Retrogaming"
    ],
    [
      "Xbox-old",
      "xboxLogoOld.png",
      "backgroundXbox.png",
      "universe_Retrogaming"
    ],
    [
      "Sega",
      "Sega-Logo.png",
      "backgroundSega.png",
      "universe_Retrogaming"
    ],
    [
      "Atari",
      "AtariLogo.png",
      "backgroundAtari.png",
      "universe_Retrogaming"
    ],
    [
      "Nintendo",
      "NintendoLogo_Red.png",
      "backgroundNintendo.png",
      "universe_NewGeneration"
    ],
    [
      "Playstation",
      "PlaystationLogoNew.png",
      "backgroundPlaystation.png",
      "universe_NewGeneration"
    ],
    [
      "Xbox",
      "xboxLogoNew.png",
      "backgroundXbox.png",
      "universe_NewGeneration"
    ],

  ];

  public function load(ObjectManager $manager): void
  {
    foreach (self::PLATEFORMES as $value) {
      # code...
      $plateforme = new Plateforme();
      $plateforme->setName($value[0]);
      $plateforme->setPhoto($value[1]);
      $plateforme->setBackground($value[2]);
      $plateforme->setUniverse($this->getReference($value[3]));
      $manager->persist($plateforme);
      $this->addReference('plateforme_' . $value[0], $plateforme);
    }
    $manager->flush();
  }

  public function getDependencies()
  {
    return [
      UniverseFixtures::class,
    ];
  }
}
