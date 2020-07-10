<?php

namespace App\Entity;

use App\Repository\EtudiantRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     *  @var string $prenom
     * @ORM\Column(name="prenom", type="string", length=50)
     * @Assert\NotBlank(message="Please provide a name")
     * @Assert\Length(
     *     min=3,
     *     max=50,
     *     minMessage="The name must be at least 3 characters long",
     *     maxMessage="The name cannot be longer than 50 characters"
     * )
     * @Assert\Regex(
     *     pattern="/^[A-Za-z]+$/",
     *     message="Only letters allowed"
     * )
     */
   
    private $prenom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom;
    /**
     * @ORM\Column(type="string", length=50)
     */
    private $matricule ;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\Email(
     *      message="Email non valide"
     * )
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Regex(
     *     pattern="/^[7][0|6|7|8]([0-9]{7})$/",
     *     message="Numero uniquement"
     * )
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
     * @ORM\ManyToOne(targetEntity=Chambre::class, inversedBy="etudiants")
     */
    private $loger;

   
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Address;

    /**
     * @ORM\ManyToOne(targetEntity=TypeBourse::class, inversedBy="etudiants")
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

    public function getLoger(): ?Chambre
    {
        return $this->loger;
    }

    public function setLoger(?Chambre $loger): self
    {
        $this->loger = $loger;

        return $this;
    }

  

    public function getAddress(): ?string
    {
        return $this->Address;
    }

    public function setAddress(?string $Address): self
    {
        $this->Address = $Address;

        return $this;
    }

    public function getBoursier(): ?TypeBourse
    {
        return $this->boursier;
    }

    public function setBoursier(?TypeBourse $boursier): self
    {
        $this->boursier = $boursier;

        return $this;
    }

 
}
