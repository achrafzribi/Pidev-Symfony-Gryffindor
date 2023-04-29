<?php

namespace App\Entity;

use App\Repository\VehiculeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: VehiculeRepository::class)]
class Vehicule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: "Le champ 'modele' ne doit pas être vide.")]
    #[Assert\Length(
        max: 20,
        maxMessage: "Le champ 'modele' ne doit pas dépasser {{ limit }} caractères."
    )]
    private ?string $modele = null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: "Le champ 'type' ne doit pas être vide.")]
    #[Assert\Length(
        max: 20,
        maxMessage: "Le champ 'type' ne doit pas dépasser {{ limit }} caractères."
    )]
    private ?string $type = null;

    #[ORM\Column]
    private ?int $idc = null;

    #[ORM\Column]
    private ?int $nbplaces = null;

    #[ORM\Column(length: 12)]
    #[Assert\NotBlank(message: "Le champ 'immatriculation' ne doit pas être vide.")]
    #[Assert\Length(
        max: 12,
        maxMessage: "Le champ 'immatriculation' ne doit pas dépasser {{ limit }} caractères."
    )]
    private ?string $immatriculation = null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: "Le champ 'marque' ne doit pas être vide.")]
    #[Assert\Length(
        max: 20,
        maxMessage: "Le champ 'marque' ne doit pas dépasser {{ limit }} caractères."
    )]
    private ?string $marque = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getIdc(): ?int
    {
        return $this->idc;
    }

    public function setIdc(int $idc): self
    {
        $this->idc = $idc;

        return $this;
    }

    public function getNbPlaces(): ?int
    {
        return $this->nbplaces;
    }

    public function setNbPlaces(int $nbplaces): self
    {
        $this->nbplaces = $nbplaces;

        return $this;
    }

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(string $immatriculation): self
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }
}
