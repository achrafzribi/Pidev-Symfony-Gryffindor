<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use DateTimeInterface;
use Scheb\TwoFactorBundle\Model\Google\TwoFactorInterface;
use App\Entity\Assurance;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface, TwoFactorInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: 'integer', length: 11)]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 20)]
    #[Assert\NotBlank(message: 'First Name should not be Empty.')]
   private ?string $FirstName = null;

   #[ORM\Column(length: 20)]
   #[Assert\NotBlank(message: 'Last Name should not be Empty.')]
   private ?string $LastName = null;

   #[ORM\Column(type: 'json')]
   private array $roles =[];

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    #[Assert\NotBlank(message: 'Email should not be Empty.')]
    #[Assert\Email(message: "Email '{{ value }}' is not a valid email.")]
    private ?string $email = null;

    /**
     * @var string The hashed password
     */
    #[ORM\Column(type: 'string')]
    #[Assert\NotBlank(message: 'Password should not be Empty.')]
    #[Assert\Length(
        min: 6,
        minMessage: 'Your password must be at least {{ limit }} characters long.'
    )]
    private ?string $password = null;

    #[Assert\NotBlank(groups: ["Registration"])]
    #[Assert\Length(
        min: 6,
        max: 4096,
        minMessage: 'Your password must be at least {{ limit }} characters long.',
        groups: ["Registration"]
    )]
private ?string $plainPassword = null;

#[ORM\PostLoad()]
public function onPostLoad(): void
{
    $this->plainPassword = null;
}

#[ORM\PrePersist(), ORM\PreUpdate()]
public function onPrePersist(): void
{
    if ($this->plainPassword) {
        $this->password = password_hash($this->plainPassword, PASSWORD_BCRYPT);
    }
}

    #[ORM\Column]
    #[Assert\NotBlank(message: 'phone number should not be Empty.')]
    #[Assert\Positive]
    #[Assert\Regex(
        pattern: '/^[0-9]{8}$/',
        message: 'Le numéro de téléphone doit contenir exactement 8 chiffres.'
    )]
    private ?int $telephone = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: 'Birthdate should not be Empty.')]
    #[Assert\LessThanOrEqual(
        value: '-18 years',
        message: 'Vous devez être âgé d\'au moins 18 ans.'
    )]
    private ?\DateTimeInterface $birthdate = null;

    #[ORM\Column(length: 10)]
    #[Assert\NotBlank(message: 'Gender should not be Empty.')]
    private ?string $gender = null;

    #[ORM\Column(length: 180, nullable: true)]
    private ?string $reset_token = null;

    #[ORM\Column(name:'googleAuthenticatorSecret', type: 'string', nullable: true)]
    private $googleAuthenticatorSecret;

    #[ORM\OneToMany(targetEntity: Assurance::class, mappedBy: 'user')]
    private $assurances;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }

    public function setFirstName(?string $FirstName): self
    {
        $this->FirstName = $FirstName ?? '';

    return $this;
    }
    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    public function setLastName(string $LastName): self
    {
        $this->LastName = $LastName;

        return $this;
    }
      /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

  

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password ?? '';
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getBirthdate(): ?\DateTimeInterface
    {
        return $this->birthdate;
    }

    public function setBirthdate(?\DateTimeInterface $birthdate): self
    {
        $this->birthdate = $birthdate;
    
        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getResetToken(): ?string
    {
        return $this->reset_token;
    }

    public function setResetToken(?string $reset_token): self
    {
        $this->reset_token = $reset_token;

        return $this;
    }
    public function isGoogleAuthenticatorEnabled(): bool
    {
        return $this->googleAuthenticatorSecret ? true : false;
    }

    public function getGoogleAuthenticatorUsername(): string
    {
        return $this->email;
    }

    public function getGoogleAuthenticatorSecret(): ?string
    {
        return $this->googleAuthenticatorSecret;
    }

    public function setGoogleAuthenticatorSecret(?string $googleAuthenticatorSecret): void
    {
        $this->googleAuthenticatorSecret = $googleAuthenticatorSecret;
    }

    public function __construct()
    {
        $this->assurances = new ArrayCollection();
    }

    public function getAssurance(): Collection
    {
        return $this->assurance;
    }

    public function addAssurance(Assurance $assurance): self
    {
        if (!$this->assurance->contains($assurance)) {
            $this->assurance[] = $assurance;
            $assurance->setCreatedBy($this);
        }

        return $this;
    }

    public function removeAssurance(Assurance $assurance): self
    {
        if ($this->assurance->removeElement($assurance)) {
            // set the owning side to null (unless already changed)
            if ($assurance->getCreatedBy() === $this) {
                $assurance->setCreatedBy(null);
            }
        }

        return $this;
    }
  
    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    public function setPlainPassword(?string $plainPassword): void
    {
        $this->plainPassword = $plainPassword;
    }
}
