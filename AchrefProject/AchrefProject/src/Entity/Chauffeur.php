<?php

namespace App\Entity;

use App\Repository\ChauffeurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ChauffeurRepository::class)]
class Chauffeur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull(message: "Le nom ne peut pas être nulle.")]
    private ?string $nomc = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull(message: "Le prénom ne peut pas être nulle.")]
    private ?string $prenomc = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "Le numéro ne peut pas être nulle.")]
    private ?int $numc = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull(message: "L'adresse  ne peut pas être nulle.")]
    private ?string $adressec = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull(message: "L'email  ne peut pas être nulle.")]
    #[Assert\Email(message: "L'adresse email '{{ value }}' n'est pas valide.")]
    private ?string $emailc = null;

    #[ORM\OneToMany(mappedBy: 'chauffeur', targetEntity: Infotrafic::class)]
    private Collection $infotrafic;

    public function __construct()
    {
        $this->infotrafic = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomc(): ?string
    {
        return $this->nomc;
    }

    public function setNomc(string $nomc): self
    {
        $this->nomc = $nomc;

        return $this;
    }

    public function getPrenomc(): ?string
    {
        return $this->prenomc;
    }

    public function setPrenomc(string $prenomc): self
    {
        $this->prenomc = $prenomc;

        return $this;
    }

    public function getNumc(): ?int
    {
        return $this->numc;
    }

    public function setNumc(int $numc): self
    {
        $this->numc = $numc;

        return $this;
    }

    public function getAdressec(): ?string
    {
        return $this->adressec;
    }

    public function setAdressec(string $adressec): self
    {
        $this->adressec = $adressec;

        return $this;
    }

    public function getEmailc(): ?string
    {
        return $this->emailc;
    }

    public function setEmailc(string $emailc): self
    {
        $this->emailc = $emailc;

        return $this;
    }

    /**
     * @return Collection<int, Infotrafic>
     */
    public function getInfotrafic(): Collection
    {
        return $this->infotrafic;
    }

    public function addInfotrafic(Infotrafic $infotrafic): self
    {
        if (!$this->infotrafic->contains($infotrafic)) {
            $this->infotrafic->add($infotrafic);
            $infotrafic->setChauffeur($this);
        }

        return $this;
    }

    public function removeInfotrafic(Infotrafic $infotrafic): self
    {
        if ($this->infotrafic->removeElement($infotrafic)) {
            // set the owning side to null (unless already changed)
            if ($infotrafic->getChauffeur() === $this) {
                $infotrafic->setChauffeur(null);
            }
        }

        return $this;
    }
    public function __toString(): string
    {
        return $this->id;
    }
}
