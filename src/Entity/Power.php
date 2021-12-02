<?php

namespace App\Entity;

use App\Repository\PowerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PowerRepository::class)
 */
class Power
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
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity=Divinity::class, inversedBy="powers")
     */
    private $divinity;

    public function __construct()
    {
        $this->divinity = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|Divinity[]
     */
    public function getDivinity(): Collection
    {
        return $this->divinity;
    }

    public function addDivinity(Divinity $divinity): self
    {
        if (!$this->divinity->contains($divinity)) {
            $this->divinity[] = $divinity;
        }

        return $this;
    }

    public function removeDivinity(Divinity $divinity): self
    {
        $this->divinity->removeElement($divinity);

        return $this;
    }
}
