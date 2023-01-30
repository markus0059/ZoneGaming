<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ConsoleFixtures extends Fixture implements DependentFixtureInterface
{
    public const CONSOLES = [
      [
        "Nes",
        "nintendo-nes.png",
        "Le Nintendo Entertainment System, par abréviation NES, est une console de jeux vidéo de génération 8 bits fabriquée par l'entreprise japonaise Nintendo et distribuée à partir de 1985 (1987 en Europe).",
        75,
        250,
        40,
        70,
        40,
        70,
        "universe_Retrogaming",
        "plateforme_Nintendo-old"
      ]

    ];

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }

    public function getDependencies()
  {
    return [
      UniverseFixtures::class,
      PlateformeFixtures::class,
    ];
  }
}
