<?php

namespace App\Entity;

use App\Repository\TypeEtudiantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeEtudiantRepository::class)
 */
class TypeEtudiant
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $options;

    /**
     * @ORM\OneToMany(targetEntity=Etudiant::class, mappedBy="etre")
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
           return $this->options;
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOptions(): ?string
    {
        return $this->options;
    }

    public function setOptions(string $options): self
    {
        $this->options = $options;

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
            $etudiant->setEtre($this);
        }

        return $this;
    }

    public function removeEtudiant(Etudiant $etudiant): self
    {
        if ($this->etudiants->contains($etudiant)) {
            $this->etudiants->removeElement($etudiant);
            // set the owning side to null (unless already changed)
            if ($etudiant->getEtre() === $this) {
                $etudiant->setEtre(null);
            }
        }

        return $this;
    }

}
