<?php

namespace App\Entity;

use App\Repository\EtudiantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EtudiantRepository::class)
 */
class Etudiant
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
    private $prenom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $tel;

    /**
     * @ORM\Column(type="date")
     */
    private $dateNaiss;

    /**
     * @ORM\ManyToOne(targetEntity=TypeEtudiant::class, inversedBy="etudiants")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etre;

    /**
     * @ORM\OneToOne(targetEntity=Address::class, cascade={"persist", "remove"})
     */
    private $loger;

    /**
     * @ORM\ManyToOne(targetEntity=Chambre::class, inversedBy="etudiants")
     */
    private $habite;

    /**
     * @ORM\ManyToOne(targetEntity=Bourse::class, inversedBy="etudiants")
     */
    private $boursier;

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(int $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getDateNaiss(): ?\DateTimeInterface
    {
        return $this->dateNaiss;
    }

    public function setDateNaiss(\DateTimeInterface $dateNaiss): self
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    public function getEtre(): ?TypeEtudiant
    {
        return $this->etre;
    }

    public function setEtre(?TypeEtudiant $etre): self
    {
        $this->etre = $etre;

        return $this;
    }

    public function getLoger(): ?Address
    {
        return $this->loger;
    }

    public function setLoger(?Address $loger): self
    {
        $this->loger = $loger;

        return $this;
    }

    public function getHabite(): ?Chambre
    {
        return $this->habite;
    }

    public function setHabite(?Chambre $habite): self
    {
        $this->habite = $habite;

        return $this;
    }

    public function getBoursier(): ?Bourse
    {
        return $this->boursier;
    }

    public function setBoursier(?Bourse $boursier): self
    {
        $this->boursier = $boursier;

        return $this;
    }

 
}
