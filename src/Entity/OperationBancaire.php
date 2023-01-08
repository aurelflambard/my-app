<?php

namespace App\Entity;

use App\Repository\OperationBancaireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OperationBancaireRepository::class)]
class OperationBancaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $libellé = null;

    #[ORM\Column(length: 255)]
    private ?string $positionGps = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lieu = null;

    #[ORM\ManyToOne(inversedBy: 'operationBancaires')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $users = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getLibellé(): ?string
    {
        return $this->libellé;
    }

    public function setLibellé(string $libellé): self
    {
        $this->libellé = $libellé;

        return $this;
    }

    public function getPositionGps(): ?string
    {
        return $this->positionGps;
    }

    public function setPositionGps(string $positionGps): self
    {
        $this->positionGps = $positionGps;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getUsers(): ?Users
    {
        return $this->users;
    }

    public function setUsers(?Users $users): self
    {
        $this->users = $users;

        return $this;
    }


}
