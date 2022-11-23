<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\FactureRepository;

#[ORM\Entity(repositoryClass: FactureRepository::class )]
class Facture
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idfacture = null;

    #[ORM\Column]
    private ?int $idcmd;

    #[ORM\Column]
    private ?int $iduser;

    #[ORM\Column]
    private ?float $montant;

    #[ORM\Column(length:255)]
    private ?string $datecmd;

    public function getIdfacture(): ?int
    {
        return $this->idfacture;
    }

    public function getIdcmd(): ?int
    {
        return $this->idcmd;
    }

    public function setIdcmd(int $idcmd): self
    {
        $this->idcmd = $idcmd;

        return $this;
    }

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function setIduser(int $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getDatecmd(): ?string
    {
        return $this->datecmd;
    }

    public function setDatecmd(string $datecmd): self
    {
        $this->datecmd = $datecmd;

        return $this;
    }


}
