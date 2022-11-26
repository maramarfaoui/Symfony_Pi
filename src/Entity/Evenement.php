<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20, nullable: true)]
    #[Assert\NotBlank(message: ('Ce Champ Doit Etre Rempli'))]
    #[Assert\Length(
        min: 4,
        max: 20,
        minMessage: 'Nom Evènement Doit contenir Au Minimun {{ limit }} Caractères',
        maxMessage: 'Nom Evènement Doit contenir Au Maximun {{ limit }} Caractères',
    )]
    private ?string $NomEvent = null;

    #[ORM\Column(length: 20, nullable: true)]
    #[Assert\NotBlank(message: ('Ce Champ Doit Etre Rempli'))]
    #[Assert\Length(
        min: 4,
        max: 20,
        minMessage: 'Adresse Evènement Doit contenir Au Minimun {{ limit }} Caractères',
        maxMessage: 'Adresse Evènement Doit contenir Au Maximun {{ limit }} Caractères',
    )]
    private ?string $AdresseEvent = null;


    #[ORM\Column(length: 20, nullable: true)]
    #[Assert\NotBlank(message: ('Ce Champ Doit Etre Rempli'))]
    #[Assert\Positive(message: ('La Capacité Evènements Doit Un Nombre Positif'))]

    private ?int $CapaciteEvent = null;


    #[ORM\Column(nullable: true)]
    #[Assert\NotBlank(message: ('Ce Champ Doit Etre Rempli'))]
    #[Assert\PositiveOrZero(message: ('Le Nombre De Tickets Achetés Doit Etre 0 ou Un Nombre Positif'))]
    private ?int $nbrTicketAchete = null;


    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateDebutEvent = null;


    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]

    private ?\DateTimeInterface $DateFinEvent = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $TypeEvent = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $CategorieEvent = null;

    #[ORM\Column(nullable: true)]
    #[Assert\NotBlank(message: ('Ce Champ Doit Etre Rempli'))]
    #[Assert\Positive(message: ('Le Prix Entrée Doit Un Nombre Positif'))]
    private ?float $PrixEntre = null;

    #[ORM\Column(length: 500, nullable: true)]

    private ?string $image1 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEvent(): ?string
    {
        return $this->NomEvent;
    }

    public function setNomEvent(?string $NomEvent): self
    {
        $this->NomEvent = $NomEvent;

        return $this;
    }

    public function getAdresseEvent(): ?string
    {
        return $this->AdresseEvent;
    }

    public function setAdresseEvent(?string $AdresseEvent): self
    {
        $this->AdresseEvent = $AdresseEvent;

        return $this;
    }

    public function getCapaciteEvent(): ?string
    {
        return $this->CapaciteEvent;
    }

    public function setCapaciteEvent(?string $CapaciteEvent): self
    {
        $this->CapaciteEvent = $CapaciteEvent;

        return $this;
    }

    public function getNbrTicketAchete(): ?int
    {
        return $this->nbrTicketAchete;
    }

    public function setNbrTicketAchete(?int $nbrTicketAchete): self
    {
        $this->nbrTicketAchete = $nbrTicketAchete;

        return $this;
    }

    public function getDateDebutEvent(): ?\DateTimeInterface
    {
        return $this->DateDebutEvent;
    }

    public function setDateDebutEvent(?\DateTimeInterface $DateDebutEvent): self
    {
        $this->DateDebutEvent = $DateDebutEvent;

        return $this;
    }

    public function getDateFinEvent(): ?\DateTimeInterface
    {
        return $this->DateFinEvent;
    }

    public function setDateFinEvent(?\DateTimeInterface $DateFinEvent): self
    {
        $this->DateFinEvent = $DateFinEvent;

        return $this;
    }

    public function getTypeEvent(): ?string
    {
        return $this->TypeEvent;
    }

    public function setTypeEvent(?string $TypeEvent): self
    {
        $this->TypeEvent = $TypeEvent;

        return $this;
    }

    public function getCategorieEvent(): ?string
    {
        return $this->CategorieEvent;
    }

    public function setCategorieEvent(?string $CategorieEvent): self
    {
        $this->CategorieEvent = $CategorieEvent;

        return $this;
    }

    public function getPrixEntre(): ?float
    {
        return $this->PrixEntre;
    }

    public function setPrixEntre(?float $PrixEntre): self
    {
        $this->PrixEntre = $PrixEntre;

        return $this;
    }

    public function getImage1(): ?string
    {
        return $this->image1;
    }

    public function setImage1(?string $image1): self
    {
        $this->image1 = $image1;

        return $this;
    }

    public function __toString()
    {
        return $this->getNomEvent();
    }
}
