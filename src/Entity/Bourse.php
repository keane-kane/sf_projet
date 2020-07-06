<?php

namespace App\Entity;

use App\Repository\BourseRepository;
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
}
