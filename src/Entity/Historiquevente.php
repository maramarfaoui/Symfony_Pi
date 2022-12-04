<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historiquevente
 *
 * @ORM\Table(name="historiquevente")
 * @ORM\Entity
 */
class Historiquevente
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdVent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvent;

    /**
     * @var string
     *
     * @ORM\Column(name="DateVent", type="string", length=250, nullable=false)
     */
    private $datevent;

    /**
     * @var float
     *
     * @ORM\Column(name="QteVendue", type="float", precision=10, scale=0, nullable=false)
     */
    private $qtevendue;

    /**
     * @var float
     *
     * @ORM\Column(name="PrixVente", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixvente;

    /**
     * @var int
     *
     * @ORM\Column(name="IdPROD", type="integer", nullable=false)
     */
    private $idprod;

    public function getIdvent(): ?int
    {
        return $this->idvent;
    }

    public function getDatevent(): ?string
    {
        return $this->datevent;
    }

    public function setDatevent(string $datevent): self
    {
        $this->datevent = $datevent;

        return $this;
    }

    public function getQtevendue(): ?float
    {
        return $this->qtevendue;
    }

    public function setQtevendue(float $qtevendue): self
    {
        $this->qtevendue = $qtevendue;

        return $this;
    }

    public function getPrixvente(): ?float
    {
        return $this->prixvente;
    }

    public function setPrixvente(float $prixvente): self
    {
        $this->prixvente = $prixvente;

        return $this;
    }

    public function getIdprod(): ?int
    {
        return $this->idprod;
    }

    public function setIdprod(int $idprod): self
    {
        $this->idprod = $idprod;

        return $this;
    }


}
