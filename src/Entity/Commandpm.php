<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commandpm
 *
 * @ORM\Table(name="commandpm")
 * @ORM\Entity
 */
class Commandpm
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCPM", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcpm;

    /**
     * @var int
     *
     * @ORM\Column(name="IDProd", type="integer", nullable=false)
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
     * @ORM\Column(name="referenceCM", type="integer", nullable=false)
     */
    private $referencecm;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255, nullable=false)
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="quantiteCpm", type="integer", nullable=false)
     */
    private $quantitecpm;

    /**
     * @var int
     *
     * @ORM\Column(name="iduser", type="integer", nullable=false)
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    public function getIdcpm(): ?int
    {
        return $this->idcpm;
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

    public function getNomprod(): ?string
    {
        return $this->nomprod;
    }

    public function setNomprod(string $nomprod): self
    {
        $this->nomprod = $nomprod;

        return $this;
    }

    public function getReferencecm(): ?int
    {
        return $this->referencecm;
    }

    public function setReferencecm(int $referencecm): self
    {
        $this->referencecm = $referencecm;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getQuantitecpm(): ?int
    {
        return $this->quantitecpm;
    }

    public function setQuantitecpm(int $quantitecpm): self
    {
        $this->quantitecpm = $quantitecpm;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }


}
