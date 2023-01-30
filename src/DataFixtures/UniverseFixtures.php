<?php

namespace App\DataFixtures;

use App\Entity\Universe;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UniverseFixtures extends Fixture
{
  public const UNIVERSES = [
    [
      "Retrogaming",
      "retrogaming.jpg"
    ],
    [
      "NewGeneration",
      "newGeneration.jpg"
    ]

  ];

  public function load(ObjectManager $manager): void
  {

    foreach (self::UNIVERSES as $value) {
      # code...
      $universe = new Universe();
      $universe->setName($value[0]);
      $universe->setPhoto($value[1]);
      $manager->persist($universe);
      $this->addReference('universe_' . $value[0], $universe);
    }

    $manager->flush();
  }
}
