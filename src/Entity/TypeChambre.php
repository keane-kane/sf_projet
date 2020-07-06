<?php

namespace App\Entity;

use App\Repository\TypeChambreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeChambreRepository::class)
 */
class TypeChambre
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
    private $genre;

    /**
     * @ORM\OneToMany(targetEntity=Chambre::class, mappedBy="typeChambre")
     */
    private $typeCh;

    public function __construct()
    {
        $this->typeCh = new ArrayCollection();
    }
/**
    * (Add this method into your class)
    *
    * @return string String representation of this class
    */
    public function __toString()
    {
           return $this->genre;
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * @return Collection|Chambre[]
     */
    public function getTypeCh(): Collection
    {
        return $this->typeCh;
    }

    public function addTypeCh(Chambre $typeCh): self
    {
        if (!$this->typeCh->contains($typeCh)) {
            $this->typeCh[] = $typeCh;
            $typeCh->setTypeChambre($this);
        }

        return $this;
    }

    public function removeTypeCh(Chambre $typeCh): self
    {
        if ($this->typeCh->contains($typeCh)) {
            $this->typeCh->removeElement($typeCh);
            // set the owning side to null (unless already changed)
            if ($typeCh->getTypeChambre() === $this) {
                $typeCh->setTypeChambre(null);
            }
        }

        return $this;
    }
}
