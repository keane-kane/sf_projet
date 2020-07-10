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

  


}
