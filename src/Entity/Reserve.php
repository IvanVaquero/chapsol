<?php

namespace App\Entity;

use App\Repository\ReserveRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReserveRepository::class)
 */
class Reserve
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $datein;

    /**
     * @ORM\Column(type="date")
     */
    private $dateout;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeroom;

    /**
     * @ORM\Column(type="integer")
     */
    private $guests;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $total;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $localizador;

    /**
     * @ORM\Column(type="integer")
     */
    private $roomid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatein(): ?\DateTimeInterface
    {
        return $this->datein;
    }

    public function setDatein(\DateTimeInterface $datein): self
    {
        $this->datein = $datein;

        return $this;
    }

    public function getDateout(): ?\DateTimeInterface
    {
        return $this->dateout;
    }

    public function setDateout(\DateTimeInterface $dateout): self
    {
        $this->dateout = $dateout;

        return $this;
    }

    public function getTyperoom(): ?string
    {
        return $this->typeroom;
    }

    public function setTyperoom(string $typeroom): self
    {
        $this->typeroom = $typeroom;

        return $this;
    }

    public function getGuests(): ?int
    {
        return $this->guests;
    }

    public function setGuests(int $guests): self
    {
        $this->guests = $guests;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(int $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getLocalizador(): ?string
    {
        return $this->localizador;
    }

    public function setLocalizador(string $localizador): self
    {
        $this->localizador = $localizador;

        return $this;
    }

    public function getRoomid(): ?int
    {
        return $this->roomid;
    }

    public function setRoomid(int $roomid): self
    {
        $this->roomid = $roomid;

        return $this;
    }
}
