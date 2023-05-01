<?php

namespace App\Entity;

use App\Repository\AssuranceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\User;

#[ORM\Entity(repositoryClass: AssuranceRepository::class)]
class Assurance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: 'Date de validité de l\'assurance ne doit pas être vide.')]
    #[Assert\GreaterThanOrEqual(
        "today",
        message: "La date de validité de l'assurance ne peut pas être inférieure à la date d'aujourd'hui."
    )]
    private ?\DateTimeInterface $date_validite = null;

    #[ORM\Column(length: 30)]
    #[Assert\NotBlank(message: 'immatriculation ne doit pas etre vide.')]
    private ?string $immatriculation = null;


    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'assurances')]
    private $createdBy;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateValidite(): ?\DateTimeInterface
    {
        return $this->date_validite;
    }

    public function setDateValidite(\DateTimeInterface $date_validite): self
    {
        $this->date_validite = $date_validite;

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

    public function getCreatedBy(): ?User
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?User $createdBy): self
    {
        $this->createdBy = $createdBy;

        return $this;
    }
}
