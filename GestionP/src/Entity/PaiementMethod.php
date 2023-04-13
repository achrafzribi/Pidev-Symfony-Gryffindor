<?php

namespace App\Entity;

use App\Repository\PaiementMethodRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaiementMethodRepository::class)]
class PaiementMethod
{

    const CREDIT_CARD = 'Credit Card';
    const CASH = 'Cash';
    const BANK_TRANSFER = 'Bank Transfer';

    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: 'Type should not be blank')]
    private ?string $Type = null;

    #[ORM\OneToMany(targetEntity: Paiement::class, mappedBy: "paymentMethod")]
    private $paiements;

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): self
    {
        $this->Type = $Type;

        return $this;
    }
}
