<?php

namespace App\Entity;

use App\Repository\ConsoleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConsoleRepository::class)]
class Console
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $model = null;

    #[ORM\Column(length: 255)]
    private ?string $photo = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $priceAllMin = null;

    #[ORM\Column]
    private ?int $priceAllMax = null;

    #[ORM\Column]
    private ?int $PriceWithControllerMin = null;

    #[ORM\Column]
    private ?int $priceWithControllerMax = null;

    #[ORM\Column]
    private ?int $priceWithCablesMin = null;

    #[ORM\Column]
    private ?int $priceWithCablesMax = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Plateforme $plateforme = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Universe $universe = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPriceAllMin(): ?int
    {
        return $this->priceAllMin;
    }

    public function setPriceAllMin(int $priceAllMin): self
    {
        $this->priceAllMin = $priceAllMin;

        return $this;
    }

    public function getPriceAllMax(): ?int
    {
        return $this->priceAllMax;
    }

    public function setPriceAllMax(int $priceAllMax): self
    {
        $this->priceAllMax = $priceAllMax;

        return $this;
    }

    public function getPriceWithControllerMin(): ?int
    {
        return $this->PriceWithControllerMin;
    }

    public function setPriceWithControllerMin(int $PriceWithControllerMin): self
    {
        $this->PriceWithControllerMin = $PriceWithControllerMin;

        return $this;
    }

    public function getPriceWithControllerMax(): ?int
    {
        return $this->priceWithControllerMax;
    }

    public function setPriceWithControllerMax(int $priceWithControllerMax): self
    {
        $this->priceWithControllerMax = $priceWithControllerMax;

        return $this;
    }

    public function getPriceWithCablesMin(): ?int
    {
        return $this->priceWithCablesMin;
    }

    public function setPriceWithCablesMin(int $priceWithCablesMin): self
    {
        $this->priceWithCablesMin = $priceWithCablesMin;

        return $this;
    }

    public function getPriceWithCablesMax(): ?int
    {
        return $this->priceWithCablesMax;
    }

    public function setPriceWithCablesMax(int $priceWithCablesMax): self
    {
        $this->priceWithCablesMax = $priceWithCablesMax;

        return $this;
    }

    public function getPlateforme(): ?Plateforme
    {
        return $this->plateforme;
    }

    public function setPlateforme(?Plateforme $plateforme): self
    {
        $this->plateforme = $plateforme;

        return $this;
    }

    public function getUniverse(): ?Universe
    {
        return $this->universe;
    }

    public function setUniverse(?Universe $universe): self
    {
        $this->universe = $universe;

        return $this;
    }
}
