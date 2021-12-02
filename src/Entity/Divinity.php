<?php

namespace App\Entity;

use App\Repository\DivinityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DivinityRepository::class)
 */
class Divinity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @ORM\ManyToOne(targetEntity=Gender::class, inversedBy="divinities")
     */
    private $gender;

    /**
     * @ORM\ManyToMany(targetEntity=Power::class, mappedBy="divinity")
     */
    private $powers;

    public function __construct()
    {
        $this->powers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getGender(): ?Gender
    {
        return $this->gender;
    }

    public function setGender(?Gender $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * @return Collection|Power[]
     */
    public function getPowers(): Collection
    {
        return $this->powers;
    }

    public function addPower(Power $power): self
    {
        if (!$this->powers->contains($power)) {
            $this->powers[] = $power;
            $power->addDivinity($this);
        }

        return $this;
    }

    public function removePower(Power $power): self
    {
        if ($this->powers->removeElement($power)) {
            $power->removeDivinity($this);
        }

        return $this;
    }
}
