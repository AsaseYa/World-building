<?php

namespace App\Entity;

use App\Repository\GenderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GenderRepository::class)
 */
class Gender
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
    private $gender;

    /**
     * @ORM\OneToMany(targetEntity=Divinity::class, mappedBy="gender")
     */
    private $divinities;

    public function __construct()
    {
        $this->divinities = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
     * @return Collection|Divinity[]
     */
    public function getDivinities(): Collection
    {
        return $this->divinities;
    }

    public function addDivinity(Divinity $divinity): self
    {
        if (!$this->divinities->contains($divinity)) {
            $this->divinities[] = $divinity;
            $divinity->setGender($this);
        }

        return $this;
    }

    public function removeDivinity(Divinity $divinity): self
    {
        if ($this->divinities->removeElement($divinity)) {
            // set the owning side to null (unless already changed)
            if ($divinity->getGender() === $this) {
                $divinity->setGender(null);
            }
        }

        return $this;
    }
}
