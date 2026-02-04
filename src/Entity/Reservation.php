<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Book $book = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    private ?User $reserving_user = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_reservation = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_expectedReturn = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBook(): ?Book
    {
        return $this->book;
    }

    public function setBook(?Book $book): static
    {
        $this->book = $book;

        return $this;
    }

    public function getReservingUser(): ?User
    {
        return $this->reserving_user;
    }

    public function setReservingUser(?User $reserving_user): static
    {
        $this->reserving_user = $reserving_user;

        return $this;
    }

    public function getDateReservation(): ?\DateTime
    {
        return $this->date_reservation;
    }

    public function setDateReservation(\DateTime $date_reservation): static
    {
        $this->date_reservation = $date_reservation;

        return $this;
    }

    public function getDateExpectedReturn(): ?\DateTime
    {
        return $this->date_expectedReturn;
    }

    public function setDateExpectedReturn(\DateTime $date_expectedReturn): static
    {
        $this->date_expectedReturn = $date_expectedReturn;

        return $this;
    }
}
