<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

/**
 * @UniqueEntity(fields={"id_user"}, message="There is already an account with this id_user")
 */
#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue (strategy:"AUTO")]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, unique : true)]
    private $id_user;

    #[ORM\Column(type: 'string', length: 255, unique : true)]
    private $pwd_user;

    #[ORM\Column(type: 'string', length: 255, unique : true)]
    private $mail;

    #[ORM\Column(type: 'string', length: 255)]
    private $first_name;

    #[ORM\Column(type: 'string', length: 255)]
    private $last_name;

    #[ORM\Column(type: 'string', length: 255)]
    private $adress;

    #[ORM\Column(type: 'string', length: 255)]
    private $gender;

    #[ORM\OneToMany(mappedBy: 'id_user', targetEntity: Message::class)]
    private $user_message;

    #[ORM\OneToMany(mappedBy: 'id_user', targetEntity: Favorite::class)]
    private $user_fav;

    #[ORM\OneToMany(mappedBy: 'id_user', targetEntity: Cart::class)]
    private $user_cart;

    #[ORM\OneToMany(mappedBy: 'id_user', targetEntity: Reservation::class)]
    private $user_reservation;

    #[ORM\Column(type: 'json')]
    private array $level = [];

    #[ORM\Column(type: 'datetime_immutable')]
    private $createdAt;

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private $deletedAt;

    public function __construct()
    {
        $this->user_message = new ArrayCollection();
        $this->user_fav = new ArrayCollection();
        $this->user_cart = new ArrayCollection();
        $this->user_reservation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?string
    {
        return $this->id_user;
    }

    public function setIdUser(string $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getPwdUser(): ?string
    {
        return $this->pwd_user;
    }

    public function setPwdUser(string $pwd_user): self
    {
        $this->pwd_user = $pwd_user;

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

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * @return Collection|Message[]
     */
    public function getUserMessage(): Collection
    {
        return $this->user_message;
    }

    public function addUserMessage(Message $userMessage): self
    {
        if (!$this->user_message->contains($userMessage)) {
            $this->user_message[] = $userMessage;
            $userMessage->setIdUser($this);
        }

        return $this;
    }

    public function removeUserMessage(Message $userMessage): self
    {
        if ($this->user_message->removeElement($userMessage)) {
            // set the owning side to null (unless already changed)
            if ($userMessage->getIdUser() === $this) {
                $userMessage->setIdUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Favorite[]
     */
    public function getUserFav(): Collection
    {
        return $this->user_fav;
    }

    public function addUserFav(Favorite $userFav): self
    {
        if (!$this->user_fav->contains($userFav)) {
            $this->user_fav[] = $userFav;
            $userFav->setIdUser($this);
        }

        return $this;
    }

    public function removeUserFav(Favorite $userFav): self
    {
        if ($this->user_fav->removeElement($userFav)) {
            // set the owning side to null (unless already changed)
            if ($userFav->getIdUser() === $this) {
                $userFav->setIdUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Cart[]
     */
    public function getUserCart(): Collection
    {
        return $this->user_cart;
    }

    public function addUserCart(Cart $userCart): self
    {
        if (!$this->user_cart->contains($userCart)) {
            $this->user_cart[] = $userCart;
            $userCart->setIdUser($this);
        }

        return $this;
    }

    public function removeUserCart(Cart $userCart): self
    {
        if ($this->user_cart->removeElement($userCart)) {
            // set the owning side to null (unless already changed)
            if ($userCart->getIdUser() === $this) {
                $userCart->setIdUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Reservation[]
     */
    public function getUserReservation(): Collection
    {
        return $this->user_reservation;
    }

    public function addUserReservation(Reservation $userReservation): self
    {
        if (!$this->user_reservation->contains($userReservation)) {
            $this->user_reservation[] = $userReservation;
            $userReservation->setIdUser($this);
        }

        return $this;
    }

    public function removeUserReservation(Reservation $userReservation): self
    {
        if ($this->user_reservation->removeElement($userReservation)) {
            // set the owning side to null (unless already changed)
            if ($userReservation->getIdUser() === $this) {
                $userReservation->setIdUser(null);
            }
        }

        return $this;
    }

    public function getRoles(): array
    {
        return $this->getLevel();
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function getUserIdentifier(): string
    {
        return $this->id_user;
    }

    public function getPassword(): ?string
    {
        return $this->pwd_user;
    }

    public function getLevel(): array
    {
        return $this->level;
    }

    public function setLevel(array $level): self
    {
        $this->level = $level;
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

    public function getDeletedAt(): ?\DateTimeImmutable
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?\DateTimeImmutable $deletedAt): self
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }
}
