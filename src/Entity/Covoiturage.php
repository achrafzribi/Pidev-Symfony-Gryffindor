<?php

namespace App\Entity;

use App\Repository\CovoiturageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: CovoiturageRepository::class)]
class Covoiturage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "L'ID du conducteur ne peut pas être vide.")]
    private ?int $idc = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le champ départ ne peut pas être vide.")]
    private ?string $depart = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le champ destination ne peut pas être vide.")]
    private ?string $destination = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotNull(message: "La date du covoiturage ne peut pas être vide.")]
    private ?\DateTimeInterface $datecovoiturage = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "Le prix ne peut pas être vide.")]
    #[Assert\Positive(message: "Le prix doit être supérieur à 0.")]
    private ?int $prix = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "Le nombre de places ne peut pas être vide.")]
    #[Assert\Positive(message: "Le nombre de places doit être supérieur à 0.")]
    private ?int $nbrplace = null;

    #[ORM\Column(length: 30)]
    #[Assert\NotBlank(message: "Le champ véhicule ne peut pas être vide.")]
    private ?string $vehicule = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDepart(): ?string
    {
        return $this->depart;
    }

    public function setDepart(string $depart): self
    {
        $this->depart = $depart;

        return $this;
    }

    public function getDestination(): ?string
    {
        return $this->destination;
    }

    public function setDestination(string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    public function getDateCovoiturage(): ?\DateTimeInterface
    {
        return $this->datecovoiturage;
    }

    public function setDateCovoiturage(\DateTimeInterface $datecovoiturage): self
    {
        $this->datecovoiturage = $datecovoiturage;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getNbrplace(): ?int
    {
        return $this->nbrplace;
    }

    public function setNbrplace(int $nbrplace): self
    {
        $this->nbrplace = $nbrplace;

        return $this;
    }

    public function getVehicule(): ?string
    {
        return $this->vehicule;
    }

    public function setVehicule(string $vehicule): self
    {
        $this->vehicule = $vehicule;

        return $this;
    }
}
