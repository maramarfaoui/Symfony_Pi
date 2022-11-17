<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]

class User
{

    #[ORM\Id]
    // #[ORM\GeneratedValue]
    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message:"field is required")]
    private ?string $id =null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"field is required")]
    #[Assert\Length(min:8,minMessage:"mdp must be at least 4 characters long" )]

    private ?string $mdp=null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"field is required")]
    private ?string $nom=null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"field is required")]
    private ?string $prenom=null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"field is required")]

    private ?string $mail=null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"field is required")]
    private ?string $adresse=null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"field is required")]
    private ?string $tel=null;


    #[ORM\Column(length: 255)]

    private ?string $rolename=null;

    #[ORM\Column (name: "role_id")]
    private ?int $role_id=null;



    #[ORM\ManyToOne(inversedBy: 'users')]
    private ?Role $role =null;

    public function getId(): ?string
    {
        return $this->id;
    }
    public function setId(string $id): ?self
    {
        $this->id=$id;
        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getRole(): ?Role
    {
        return $this->role;
    }

    public function setRole(?Role $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getRolename(): ?string
    {
        return $this->rolename;
    }

    public function setRolename(string $n): self
    {
        $this->rolename =$n;

        return $this;
    }

    public function getRoleId(): ?int
    {
        return $this->role_id;
    }

    public function setRoleId(int $r): self
    {
        $this->role_id = $r;

        return $this;
    }


}



