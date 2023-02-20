<?php

namespace App\DataFixtures;

use App\Entity\Console;
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
      foreach (self::CONSOLES as $value) {

        $console = new Console();
        $console->setModel($value[0]);
        $console->setPhoto($value[1]);
        $console->setDescription($value[2]);
        $console->setPriceAllMin($value[3]);
        $console->setPriceAllMax($value[4]);
        $console->setPriceWithControllerMin($value[5]);
        $console->setPriceWithControllerMax($value[6]);
        $console->setPriceWithCablesMin($value[7]);
        $console->setPriceWithCablesMax($value[8]);
        $console->setUniverse($this->getReference($value[9]));
        $console->setPlateforme($this->getReference($value[10]));

        $manager->persist($console);

      }
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
