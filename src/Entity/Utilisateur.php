<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Entity\File as EmbeddedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


use Symfony\Component\Validator\Validator\ValidatorInterface;


#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
#[Vich\Uploadable]
#[UniqueEntity(fields: ['email'], message: 'Attention: ce mail estdéjà utilisé')]

class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:'ce champ ne peut pas être vide') ]
    #[Assert\Length(
        min: 2,
        max: 20,
        minMessage: 'taille minimale est  {{ limit }} characters',
        maxMessage: 'la taille maximale est de  {{ limit }} characters',
    )]
    private ?string $noms = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:'ce champ ne peut pas être vide') ]
    #[Assert\Length(
        min: 2,
        max: 20,
        minMessage: 'taille minimale est  {{ limit }} characters',
        maxMessage: 'la taille maximale est de  {{ limit }} characters',
    )]
    private ?string $prenoms = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE) ]
    private ?\DateTimeInterface $datenaiss = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Url]
    private ?string $photo = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:'ce champ ne peut pas être vide') ]
    #[Assert\Email(
        message: 'l email {{ value }} nest pas un email valide.',
    )]
   
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $username = null;

    #[ORM\Column(length: 255)]
    private ?string $nationalite = null;


       // NOTE: This is not a mapped field of entity metadata, just a simple property.
       #[Vich\UploadableField(mapping: 'articles', fileNameProperty: 'imageName')]
       private ?File $imageFile = null;
   
       #[ORM\Column(nullable: true)]
       private ?string $imageName = null;
   
       #[ORM\Column(nullable: true)]
       private ?\DateTimeImmutable $updatedAt = null;
   
       /**
        * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
        * of 'UploadedFile' is injected into this setter to trigger the update. If this
        * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
        * must be able to accept an instance of 'File' as the bundle will inject one here
        * during Doctrine hydration.
        *
        * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile
        */
       public function setImageFile(?File $imageFile = null): void
       {
           $this->imageFile = $imageFile;
   
           if (null !== $imageFile) {
               // It is required that at least one field changes if you are using doctrine
               // otherwise the event listeners won't be called and the file is lost
               $this->updatedAt = new \DateTimeImmutable();
           }
       }
   
       public function getImageFile(): ?File
       {
           return $this->imageFile;
       }
   
       public function setImageName(?string $imageName): void
       {
           $this->imageName = $imageName;
       }
   
       public function getImageName(): ?string
       {
           return $this->imageName;
       }
   


   
   
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNoms(): ?string
    {
        return $this->noms;
    }

    public function setNoms(string $noms): static
    {
        $this->noms = $noms;

        return $this;
    }

    public function getPrenoms(): ?string
    {
        return $this->prenoms;
    }

    public function setPrenoms(string $prenoms): static
    {
        $this->prenoms = $prenoms;

        return $this;
    }

    public function getDatenaiss(): ?\DateTimeInterface
    {
        return $this->datenaiss;
    }

    public function setDatenaiss(?\DateTimeInterface $datenaiss): static
    {
        $this->datenaiss = $datenaiss;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): static
    {
        $this->photo = $photo;

        return $this;
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

    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    public function setNationalite(string $nationalite): static
    {
        $this->nationalite = $nationalite;

        return $this;
    }

}