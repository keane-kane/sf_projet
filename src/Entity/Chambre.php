<?php

namespace App\Entity;

use App\Repository\ChambreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChambreRepository::class)
 */
class Chambre
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
    private $Nchambre;

    /**
     * @ORM\ManyToOne(targetEntity=TypeChambre::class, inversedBy="typeCh")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeChambre;

    /**
     * @ORM\ManyToOne(targetEntity=Batiment::class, inversedBy="appartient")
     * @ORM\JoinColumn(nullable=false)
     */
    private $batiment;

    /**
     * @ORM\OneToMany(targetEntity=EtudiantComplet::class, mappedBy="loger")
     */
    private $etudiantComplets;

    public function __construct()
    {
        $this->etudiantComplets = new ArrayCollection();
    }
 /**
    * (Add this method into your class)
    *
    * @return string String representation of this class
    */
    public function __toString()
    {
           return $this->batiment;
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNchambre(): ?int
    {
        return $this->Nchambre;
    }

    public function setNchambre(int $Nchambre): self
    {
        $this->Nchambre = $Nchambre;

        return $this;
    }

    public function getTypeChambre(): ?TypeChambre
    {
        return $this->typeChambre;
    }

    public function setTypeChambre(?TypeChambre $typeChambre): self
    {
        $this->typeChambre = $typeChambre;

        return $this;
    }

    public function getBatiment(): ?Batiment
    {
        return $this->batiment;
    }

    public function setBatiment(?Batiment $batiment): self
    {
        $this->batiment = $batiment;

        return $this;
    }

    /**
     * @return Collection|EtudiantComplet[]
     */
    public function getEtudiantComplets(): Collection
    {
        return $this->etudiantComplets;
    }

    public function addEtudiantComplet(EtudiantComplet $etudiantComplet): self
    {
        if (!$this->etudiantComplets->contains($etudiantComplet)) {
            $this->etudiantComplets[] = $etudiantComplet;
            $etudiantComplet->setLoger($this);
        }

        return $this;
    }

    public function removeEtudiantComplet(EtudiantComplet $etudiantComplet): self
    {
        if ($this->etudiantComplets->contains($etudiantComplet)) {
            $this->etudiantComplets->removeElement($etudiantComplet);
            // set the owning side to null (unless already changed)
            if ($etudiantComplet->getLoger() === $this) {
                $etudiantComplet->setLoger(null);
            }
        }

        return $this;
    }
}
