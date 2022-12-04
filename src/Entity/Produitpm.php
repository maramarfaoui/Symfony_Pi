<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produitpm
 *
 * @ORM\Table(name="produitpm")
 * @ORM\Entity
 */
class Produitpm
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDProd", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprod;

    /**
     * @var string
     *
     * @ORM\Column(name="NomProd", type="string", length=255, nullable=false)
     */
    private $nomprod;

    /**
     * @var int
     *
     * @ORM\Column(name="referenceP", type="integer", nullable=false)
     */
    private $referencep;

    /**
     * @var int
     *
     * @ORM\Column(name="quantiteP", type="integer", nullable=false)
     */
    private $quantitep;

    /**
     * @var string|null
     *
     * @ORM\Column(name="typep", type="string", length=255, nullable=true)
     */
    private $typep;

    /**
     * @var int
     *
     * @ORM\Column(name="prixPM", type="integer", nullable=false)
     */
    private $prixpm;

    /**
     * @var string
     *
     * @ORM\Column(name="QRcode", type="string", length=255, nullable=false)
     */
    private $qrcode;

    /**
     * @var string
     *
     * @ORM\Column(name="dateAjoutPM", type="string", length=255, nullable=false)
     */
    private $dateajoutpm;

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

    public function getReferencep(): ?int
    {
        return $this->referencep;
    }

    public function setReferencep(int $referencep): self
    {
        $this->referencep = $referencep;

        return $this;
    }

    public function getQuantitep(): ?int
    {
        return $this->quantitep;
    }

    public function setQuantitep(int $quantitep): self
    {
        $this->quantitep = $quantitep;

        return $this;
    }

    public function getTypep(): ?string
    {
        return $this->typep;
    }

    public function setTypep(?string $typep): self
    {
        $this->typep = $typep;

        return $this;
    }

    public function getPrixpm(): ?int
    {
        return $this->prixpm;
    }

    public function setPrixpm(int $prixpm): self
    {
        $this->prixpm = $prixpm;

        return $this;
    }

    public function getQrcode(): ?string
    {
        return $this->qrcode;
    }

    public function setQrcode(string $qrcode): self
    {
        $this->qrcode = $qrcode;

        return $this;
    }

    public function getDateajoutpm(): ?string
    {
        return $this->dateajoutpm;
    }

    public function setDateajoutpm(string $dateajoutpm): self
    {
        $this->dateajoutpm = $dateajoutpm;

        return $this;
    }


}
