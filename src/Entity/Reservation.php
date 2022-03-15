<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'user_reservation')]
    #[ORM\JoinColumn(nullable: false)]
    private $id_user;

    #[ORM\ManyToOne(targetEntity: TimeSlot::class, inversedBy: 'timeslot_reservation')]
    #[ORM\JoinColumn(nullable: false)]
    private $id_timeslot;

    #[ORM\Column(type: 'datetime_immutable')]
    private $createdAt;

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

    public function getIdTimeslot(): ?TimeSlot
    {
        return $this->id_timeslot;
    }

    public function setIdTimeslot(?TimeSlot $id_timeslot): self
    {
        $this->id_timeslot = $id_timeslot;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
