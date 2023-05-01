<?php

namespace App\Entity;

use App\Repository\InfotraficRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: InfotraficRepository::class)]
class Infotrafic
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull(message: "Le type  ne peut pas être nulle.")]
    private ?string $type = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull(message: "La description  ne peut pas être nulle.")]
    private ?string $description = null;

    #[ORM\ManyToOne(inversedBy: 'infotrafic')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Chauffeur $chauffeur = null;

    #[ORM\Column]
    private ?int $likes = 0;

    #[ORM\Column]
    private ?int $dislikes = 0;
    public function getId(): ?int
    {
        return $this->id;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getChauffeur(): ?Chauffeur
    {
        return $this->chauffeur;
    }

    public function setChauffeur(?Chauffeur $chauffeur): self
    {
        $this->chauffeur = $chauffeur;

        return $this;
    }

    public function getLikes(): ?int
    {
        return $this->likes;
    }
    
    public function setLikes(int $likes): self
    {
        $this->likes = $likes;
    
        return $this;
    }
    
    public function incrementLikes(): self
    {
        $this->likes++;
    
        return $this;
    }
    
    public function decrementLikes(): self
    {
        $this->likes--;
    
        return $this;
    }
    
    public function getDislikes(): ?int
    {
        return $this->dislikes;
    }
    
    public function setDislikes(int $dislikes): self
    {
        $this->dislikes = $dislikes;
    
        return $this;
    }
    
    public function incrementDislikes(): self
    {
        $this->dislikes++;
    
        return $this;
    }
    
    public function decrementDislikes(): self
    {
        $this->dislikes--;
    
        return $this;
    }
}
