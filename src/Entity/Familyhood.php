<?php

namespace App\Entity;

use App\Repository\FamilyhoodRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FamilyhoodRepository::class)
 */
class Familyhood
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $active;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $passive;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getActive(): ?string
    {
        return $this->active;
    }

    public function setActive(string $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getPassive(): ?string
    {
        return $this->passive;
    }

    public function setPassive(string $passive): self
    {
        $this->passive = $passive;

        return $this;
    }
}
