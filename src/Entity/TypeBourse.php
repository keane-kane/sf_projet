<?php

namespace App\Entity;

use App\Repository\TypeBourseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeBourseRepository::class)
 */
class TypeBourse
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    /**
     * @ORM\OneToMany(targetEntity=Bourse::class, mappedBy="typeBourse")
     */
    private $etre;

    public function __construct()
    {
        $this->etre = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * @return Collection|Bourse[]
     */
    public function getEtre(): Collection
    {
        return $this->etre;
    }

    public function addEtre(Bourse $etre): self
    {
        if (!$this->etre->contains($etre)) {
            $this->etre[] = $etre;
            $etre->setTypeBourse($this);
        }

        return $this;
    }

    public function removeEtre(Bourse $etre): self
    {
        if ($this->etre->contains($etre)) {
            $this->etre->removeElement($etre);
            // set the owning side to null (unless already changed)
            if ($etre->getTypeBourse() === $this) {
                $etre->setTypeBourse(null);
            }
        }

        return $this;
    }
}
