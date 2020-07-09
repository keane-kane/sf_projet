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
     * @ORM\Column(type="string", length=50)
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
     * @ORM\OneToMany(targetEntity=Etudiant::class, mappedBy="habite")
     */
    private $etudiants;

   

    public function __construct()
    {
        $this->etudiants = new ArrayCollection();
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

    public function getNchambre(): ?string
    {
        return $this->Nchambre;
    }

    public function setNchambre(string $Nchambre): self
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
     * @return Collection|Etudiant[]
     */
    public function getEtudiants(): Collection
    {
        return $this->etudiants;
    }

    public function addEtudiant(Etudiant $etudiant): self
    {
        if (!$this->etudiants->contains($etudiant)) {
            $this->etudiants[] = $etudiant;
            $etudiant->setHabite($this);
        }

        return $this;
    }

    public function removeEtudiant(Etudiant $etudiant): self
    {
        if ($this->etudiants->contains($etudiant)) {
            $this->etudiants->removeElement($etudiant);
            // set the owning side to null (unless already changed)
            if ($etudiant->getHabite() === $this) {
                $etudiant->setHabite(null);
            }
        }

        return $this;
    }
}
