<?php

namespace App\Entity;

use App\Repository\AddressRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AddressRepository::class)
 */
class Address
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $LAddress;

    /**
     * @ORM\OneToMany(targetEntity=EtudiantComplet::class, mappedBy="habite")
     */
    private $etudiantComplets;

    public function __construct()
    {
        $this->etudiantComplets = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLAddress(): ?string
    {
        return $this->LAddress;
    }

    public function setLAddress(?string $LAddress): self
    {
        $this->LAddress = $LAddress;

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
            $etudiantComplet->setHabite($this);
        }

        return $this;
    }

    public function removeEtudiantComplet(EtudiantComplet $etudiantComplet): self
    {
        if ($this->etudiantComplets->contains($etudiantComplet)) {
            $this->etudiantComplets->removeElement($etudiantComplet);
            // set the owning side to null (unless already changed)
            if ($etudiantComplet->getHabite() === $this) {
                $etudiantComplet->setHabite(null);
            }
        }

        return $this;
    }
}
