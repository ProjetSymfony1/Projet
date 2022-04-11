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
    #[ORM\Column(type: 'integer')]
    private $id_user;

    #[ORM\ManyToMany(targetEntity: dish::class, inversedBy: 'carts')]
    #[ORM\Column(type: 'json')]
    private array $id_dish = [];

    #[ORM\Column(type: 'string', length: 255)]
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getIdDish(): array
    {
        return $this->id_dish;
    }
	
	public function setIdDish(array $id_dish): self
	{
		$this->id_dish = $id_dish;
		return $this;
	}

    public function addIdDish(int $idDish): self
    {
        if (array_key_exists($idDish, $this->id_dish))
        {
            $nbr = $this->id_dish[$idDish];
            $this->id_dish[$idDish] = $nbr+1;
        } else {
            $this->id_dish[$idDish] = 1;
        }
        return $this;
    }

    public function removeIdDish(dish $idDish): self
    {
        $this->id_dish->removeElement($idDish);

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
