<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImageRepository::class)
 */
class Image
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avecFleurs;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avecFruits;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avecFeuilles;

    /**
     * @ORM\ManyToOne(targetEntity=Plantes::class, inversedBy="imageId")
     */
    private $plantes;

    public function __construct()
    {
        $this->plantesId = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getAvecFleurs(): ?string
    {
        return $this->avecFleurs;
    }

    public function setAvecFleurs(?string $avecFleurs): self
    {
        $this->avecFleurs = $avecFleurs;

        return $this;
    }

    public function getAvecFruits(): ?string
    {
        return $this->avecFruits;
    }

    public function setAvecFruits(?string $avecFruits): self
    {
        $this->avecFruits = $avecFruits;

        return $this;
    }

    public function getAvecFeuilles(): ?string
    {
        return $this->avecFeuilles;
    }

    public function setAvecFeuilles(?string $avecFeuilles): self
    {
        $this->avecFeuilles = $avecFeuilles;

        return $this;
    }

    public function getPlantes(): ?Plantes
    {
        return $this->plantes;
    }

    public function setPlantes(?Plantes $plantes): self
    {
        $this->plantes = $plantes;

        return $this;
    }
}
