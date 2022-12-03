<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @var string
     *
     * @ORM\Column(name="NomProd", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message=" Nom Oeuvre doit etre non vide")

     */
    private $nomprod;

    /**
     * @var float
     *@Assert\NotBlank(message=" Prix doit etre non vide")
     * @ORM\Column(name="PrixProd", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixprod;

    /**
     * @var string
     * @Assert\NotBlank(message=" Localisation doit etre non vide")
     * @ORM\Column(name="LocalisationProd", type="string", length=255, nullable=false)
     */
    private $localisationprod;

    /**
     * @var string
     * @Assert\NotBlank(message=" Type doit etre non vide")

     * @ORM\Column(name="TypeProd", type="string", length=255, nullable=false)
     */
    private $typeprod;

    /**
     * @var string
     * @Assert\NotBlank(message=" Status doit etre non vide")
     * @ORM\Column(name="TypeStatue", type="string", length=255, nullable=false)
     */
    private $typestatue;

    /**
     * @var string
     *
     * @ORM\Column(name="imagem1", type="string", length=500, nullable=false)
     */
    private $imagem1;

    /**
     * @ORM\OneToMany(targetEntity=Like::class, mappedBy="produit")
     */
    private $rating;

    public function __construct()
    {
        $this->rating = new ArrayCollection();
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

    /**
     * @return Collection<int, Like>
     */
    public function getRating(): Collection
    {
        return $this->rating;
    }

    public function addRating(Like $rating): self
    {
        if (!$this->rating->contains($rating)) {
            $this->rating[] = $rating;
            $rating->setProduit($this);
        }

        return $this;
    }

    public function removeRating(Like $rating): self
    {
        if ($this->rating->removeElement($rating)) {
            // set the owning side to null (unless already changed)
            if ($rating->getProduit() === $this) {
                $rating->setProduit(null);
            }
        }

        return $this;
    }


}
