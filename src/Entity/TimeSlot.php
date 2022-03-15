<?php

namespace App\Entity;

use App\Repository\TimeSlotRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TimeSlotRepository::class)]
class TimeSlot
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'boolean')]
    private $available;

    #[ORM\OneToMany(mappedBy: 'id_timeslot', targetEntity: Reservation::class)]
    private $timeslot_reservation;

    #[ORM\Column(type: 'datetime')]
    private $dateTime;

    public function __construct()
    {
        $this->timeslot_reservation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAvailable(): ?bool
    {
        return $this->available;
    }

    public function setAvailable(bool $available): self
    {
        $this->available = $available;

        return $this;
    }

    /**
     * @return Collection|Reservation[]
     */
    public function getTimeslotReservation(): Collection
    {
        return $this->timeslot_reservation;
    }

    public function addTimeslotReservation(Reservation $timeslotReservation): self
    {
        if (!$this->timeslot_reservation->contains($timeslotReservation)) {
            $this->timeslot_reservation[] = $timeslotReservation;
            $timeslotReservation->setIdTimeslot($this);
        }

        return $this;
    }

    public function removeTimeslotReservation(Reservation $timeslotReservation): self
    {
        if ($this->timeslot_reservation->removeElement($timeslotReservation)) {
            // set the owning side to null (unless already changed)
            if ($timeslotReservation->getIdTimeslot() === $this) {
                $timeslotReservation->setIdTimeslot(null);
            }
        }

        return $this;
    }

    public function getDateTime(): ?\DateTimeInterface
    {
        return $this->dateTime;
    }

    public function setDateTime(\DateTimeInterface $dateTime): self
    {
        $this->dateTime = $dateTime;

        return $this;
    }
}
