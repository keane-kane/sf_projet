<?php

namespace App\Entity;

use App\Repository\BatimentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BatimentRepository::class)
 */
class Batiment
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
    private $Nbatiment;

    /**
     * @ORM\OneToMany(targetEntity=Chambre::class, mappedBy="batiment")
     */
    private $appartient;

    public function __construct()
    {
        $this->appartient = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbatiment(): ?int
    {
        return $this->Nbatiment;
    }

    public function setNbatiment(int $Nbatiment): self
    {
        $this->Nbatiment = $Nbatiment;

        return $this;
    }

    /**
     * @return Collection|Chambre[]
     */
    public function getAppartient(): Collection
    {
        return $this->appartient;
    }

    public function addAppartient(Chambre $appartient): self
    {
        if (!$this->appartient->contains($appartient)) {
            $this->appartient[] = $appartient;
            $appartient->setBatiment($this);
        }

        return $this;
    }

    public function removeAppartient(Chambre $appartient): self
    {
        if ($this->appartient->contains($appartient)) {
            $this->appartient->removeElement($appartient);
            // set the owning side to null (unless already changed)
            if ($appartient->getBatiment() === $this) {
                $appartient->setBatiment(null);
            }
        }

        return $this;
    }
}
