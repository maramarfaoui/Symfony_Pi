<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdPROD", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprod;

    /**
     * @Assert\NotBlank(message=" Nom doit etre non vide")
     * @var string
     *
     * @ORM\Column(name="NomProd", type="string", length=255, nullable=false)
     */
    private $nomprod;

    /**
     *  @Assert\NotBlank(message=" Prix doit etre non vide")
     * @var float
     *
     * @ORM\Column(name="PrixProd", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixprod;

    /**
     *  @Assert\NotBlank(message=" Localisation doit etre non vide")
     * @var string
     *
     * @ORM\Column(name="LocalisationProd", type="string", length=255, nullable=false)
     */
    private $localisationprod;

    /**
     *  @Assert\NotBlank(message=" Type doit etre non vide")
     * @var string
     *
     * @ORM\Column(name="TypeProd", type="string", length=255, nullable=false)
     */
    private $typeprod;

    /**
     *  @Assert\NotBlank(message=" Statut doit etre non vide")
     * @var string
     *
     * @ORM\Column(name="TypeStatue", type="string", length=255, nullable=false)
     */
    private $typestatue;

    /**
     * @var string
     *
     * @ORM\Column(name="imagem1", type="string", length=500, nullable=false)
     */
    private $imagem1;

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

    public function getPrixprod(): ?float
    {
        return $this->prixprod;
    }

    public function setPrixprod(float $prixprod): self
    {
        $this->prixprod = $prixprod;

        return $this;
    }

    public function getLocalisationprod(): ?string
    {
        return $this->localisationprod;
    }

    public function setLocalisationprod(string $localisationprod): self
    {
        $this->localisationprod = $localisationprod;

        return $this;
    }

    public function getTypeprod(): ?string
    {
        return $this->typeprod;
    }

    public function setTypeprod(string $typeprod): self
    {
        $this->typeprod = $typeprod;

        return $this;
    }

    public function getTypestatue(): ?string
    {
        return $this->typestatue;
    }

    public function setTypestatue(string $typestatue): self
    {
        $this->typestatue = $typestatue;

        return $this;
    }

    public function getImagem1(): ?string
    {
        return $this->imagem1;
    }

    public function setImagem1(string $imagem1): self
    {
        $this->imagem1 = $imagem1;

        return $this;
    }


}
