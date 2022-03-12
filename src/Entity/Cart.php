<?php

namespace App\Entity;

use App\Repository\CartRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CartRepository::class)]
class Cart
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'user_cart')]
    #[ORM\JoinColumn(nullable: false)]
    private $id_user;

    #[ORM\ManyToMany(targetEntity: dish::class, inversedBy: 'carts')]
    private $id_dish;

    public function __construct()
    {
        $this->id_dish = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?User
    {
        return $this->id_user;
    }

    public function setIdUser(?User $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * @return Collection|dish[]
     */
    public function getIdDish(): Collection
    {
        return $this->id_dish;
    }

    public function addIdDish(dish $idDish): self
    {
        if (!$this->id_dish->contains($idDish)) {
            $this->id_dish[] = $idDish;
        }

        return $this;
    }

    public function removeIdDish(dish $idDish): self
    {
        $this->id_dish->removeElement($idDish);

        return $this;
    }
}
