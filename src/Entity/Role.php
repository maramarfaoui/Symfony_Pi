<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\RoleRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: RoleRepository::class)]



class Role
{

    #[ORM\Id]
    // #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Assert\NotBlank(message:"id is required")]
    private ?int $id =null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"name is required")]
    #[Assert\Length(min:4,max:30,minMessage:"name must be at least 4 characters long",maxMessage:"name cannot be longer than 30 characters long" )]
    private ?string $name=null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"detail is required")]
    #[Assert\Length(min:4,max:100,minMessage:"name must be at least 4 characters long",maxMessage:"name cannot be longer than 100 characters long" )]

    private ?string $detail=null;


    #[ORM\OneToMany(mappedBy: 'role',targetEntity: User::class)]
    private Collection $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }




    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDetail(): ?string
    {
        return $this->detail;
    }

    public function setDetail(string $detail): self
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->setRole($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getRole() === $this) {
                $user->setRole(null);
            }
        }

        return $this;
    }



}
