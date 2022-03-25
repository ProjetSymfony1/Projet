<?php

namespace App\Entity;

use App\Repository\FavoriteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FavoriteRepository::class)]
class Favorite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'user_fav')]
    #[ORM\JoinColumn(nullable: false)]
    #[ORM\Column(type: 'integer')]
    private $id_user;

    #[ORM\ManyToOne(targetEntity: dish::class, inversedBy: 'favorites')]
    #[ORM\JoinColumn(nullable: false)]
    #[ORM\Column(type: 'integer')]
    private $id_dish;

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

    public function setUserDish(int $idUser) : self
    {
        $this->id_user = $idUser;
        return $this;
    }

    public function getIdDish(): int
    {
        return $this->id_dish;
    }

    public function setIdDish(?dish $id_dish): self
    {
        $this->id_dish = $id_dish;

        return $this;
    }

    public function setDishFav(int $idDish): self
    {
        $this->id_dish = $idDish;

        return $this;
    }
}
