<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\PanierRepository;

#[ORM\Entity(repositoryClass: PanierRepository::class )]
class Panier
{
    #[ORM\Id]
    #[ORM\Column]
    private ?int $idpanier;

    #[ORM\Column]
    private ?int $idprod;

    #[ORM\Column(length: 255)]
    private ?string $nomprod;

    #[ORM\Column]
    private ?int $quantite;

    #[ORM\Column]
    private ?float $prixprod;

    #[ORM\Column]
    private ?float $prixremise;

    public function getIdpanier(): ?int
    {
        return $this->idpanier;
    }

    public function getIdprod(): ?int
    {
        return $this->idprod;
    }

    public function getNomprod(): ?string
    {
        return $this->nomprod;
    }

    public function setNomprod(string $nomprod): self
    {
        $this->nomprod = $nomprod;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getPrixprod(): ?float
    {
        return $this->prixprod;
    }

    public function setPrixprod(float $prixprod): self
    {
        $this->prixprod = $prixprod;

        return $this;
    }

    public function getPrixremise(): ?float
    {
        return $this->prixremise;
    }

    public function setPrixremise(float $prixremise): self
    {
        $this->prixremise = $prixremise;

        return $this;
    }

    public function setIdprod(int $idprod): self
    {
        $this->idprod = $idprod;

        return $this;
    }


}
