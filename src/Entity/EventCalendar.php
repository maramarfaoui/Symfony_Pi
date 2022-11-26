<?php

namespace App\Entity;

use App\Repository\EventCalendarRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventCalendarRepository::class)]
class EventCalendar
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $title = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $start = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $end = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 10)]
    private ?string $background_Color = null;

    #[ORM\Column(length: 10)]
    private ?string $border_Color = null;

    #[ORM\Column(length: 10)]
    private ?string $Text_Color = null;

    #[ORM\Column]
    private ?bool $journee_entiere = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getStart(): ?\DateTimeInterface
    {
        return $this->start;
    }

    public function setStart(\DateTimeInterface $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getEnd(): ?\DateTimeInterface
    {
        return $this->end;
    }

    public function setEnd(\DateTimeInterface $end): self
    {
        $this->end = $end;

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

    public function getBackgroundColor(): ?string
    {
        return $this->background_Color;
    }

    public function setBackgroundColor(string $background_Color): self
    {
        $this->background_Color = $background_Color;

        return $this;
    }

    public function getBorderColor(): ?string
    {
        return $this->border_Color;
    }

    public function setBorderColor(string $border_Color): self
    {
        $this->border_Color = $border_Color;

        return $this;
    }

    public function getTextColor(): ?string
    {
        return $this->Text_Color;
    }

    public function setTextColor(string $Text_Color): self
    {
        $this->Text_Color = $Text_Color;

        return $this;
    }

    public function isJourneeEntiere(): ?bool
    {
        return $this->journee_entiere;
    }

    public function setJourneeEntiere(bool $journee_entiere): self
    {
        $this->journee_entiere = $journee_entiere;

        return $this;
    }


}
