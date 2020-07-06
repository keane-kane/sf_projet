<?php

namespace App\Entity;

use App\Repository\EtudiantCompletRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EtudiantCompletRepository::class)
 */
class EtudiantComplet
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Address::class, inversedBy="etudiantComplets")
     */
    private $habite;

    /**
     * @ORM\OneToOne(targetEntity=Bourse::class, cascade={"persist", "remove"})
     */
    private $avoirBourse;

    /**
     * @ORM\ManyToOne(targetEntity=Chambre::class, inversedBy="etudiantComplets")
     */
    private $loger;

    /**
     * @ORM\ManyToOne(targetEntity=TypeEtudiant::class, inversedBy="etudiantComplets")
     * @ORM\JoinColumn(nullable=false)
     */
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHabite(): ?Address
    {
        return $this->habite;
    }

    public function setHabite(?Address $habite): self
    {
        $this->habite = $habite;

        return $this;
    }

    public function getAvoirBourse(): ?Bourse
    {
        return $this->avoirBourse;
    }

    public function setAvoirBourse(?Bourse $avoirBourse): self
    {
        $this->avoirBourse = $avoirBourse;

        return $this;
    }

    public function getLoger(): ?Chambre
    {
        return $this->loger;
    }

    public function setLoger(?Chambre $loger): self
    {
        $this->loger = $loger;

        return $this;
    }

    public function getStatus(): ?TypeEtudiant
    {
        return $this->status;
    }

    public function setStatus(?TypeEtudiant $status): self
    {
        $this->status = $status;

        return $this;
    }
}
