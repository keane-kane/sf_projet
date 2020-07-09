<?php

namespace App\Entity;

use App\Repository\BourseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BourseRepository::class)
 */
class Bourse
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=TypeBourse::class, inversedBy="etre")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeBourse;

    /**
     * @ORM\OneToMany(targetEntity=Etudiant::class, mappedBy="boursier")
     */
    private $etudiants;

    public function __construct()
    {
        $this->etudiants = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeBourse(): ?TypeBourse
    {
        return $this->typeBourse;
    }

    public function setTypeBourse(?TypeBourse $typeBourse): self
    {
        $this->typeBourse = $typeBourse;

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
            $etudiant->setBoursier($this);
        }

        return $this;
    }

    public function removeEtudiant(Etudiant $etudiant): self
    {
        if ($this->etudiants->contains($etudiant)) {
            $this->etudiants->removeElement($etudiant);
            // set the owning side to null (unless already changed)
            if ($etudiant->getBoursier() === $this) {
                $etudiant->setBoursier(null);
            }
        }

        return $this;
    }
}
