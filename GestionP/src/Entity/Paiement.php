<?php

namespace App\Entity;
use App\Entity\PaiementMethod;
use App\Repository\PaiementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaiementRepository::class)]
class Paiement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $Amount = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $PaiementDate = null;

    ##[ORM\Column]
    #private ?int $M_id = null;

    #[ORM\Column(length: 255)]
    private ?string $Description = null;

    #[ORM\ManyToOne(targetEntity: PaiementMethod::class)]
    #[ORM\JoinColumn(name: "M_id", referencedColumnName: "id", nullable: false)]
    private ?PaiementMethod $paymentMethod = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAmount(): ?float
    {
        return $this->Amount;
    }

    public function setAmount(float $Amount): self
    {
        $this->Amount = $Amount;

        return $this;
    }

    public function getPaiementDate(): ?\DateTimeInterface
    {
        return $this->PaiementDate;
    }

    public function setPaiementDate(?\DateTimeInterface $PaiementDate): self
    {
        $this->PaiementDate = $PaiementDate;

        return $this;
    }

   /* public function getMId(): ?int
    {
        return $this->M_id;
    }

    public function setMId(int $M_id): self
    {
        $this->M_id = $M_id;

        return $this;
    } */

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getPaymentMethod(): ?PaiementMethod
    {
        return $this->paymentMethod;
    }
    
    public function setPaymentMethod(?PaiementMethod $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }
}
