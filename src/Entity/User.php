<?php

namespace App\Entity;

use Assert\EqualTo;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity('email', message: "Mail deja utilisé")]

class User implements UserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $username = null;

    #[ORM\Column(length: 255)]
    #[Assert\EqualTo(propertyPath: "confirm_password", message: "mot de passe non corconrdant ")]
    #[Assert\Length(
        min: 8,
        max: 16,
        minMessage: 'le mot de passe doit faire au moins {{ limit }} caracteres',
        maxMessage: 'le mot de passe ne doit pas depasser   {{ limit }} caaracters',
    )]
    private ?string $password = null;

    #[Assert\EqualTo(propertyPath: "password", message: "mot de passe non corconrdant ")]
    public $confirm_password;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function eraseCredentials(){

    }

    public function getSalt(){

    }

   /**
     * getRoles
     *
     * @return array['ROLE_USER']
     */
    public function getRoles()
    {
        return ['ROLE_ADMIN'];
    }  



}
