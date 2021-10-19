<?php

namespace App\Entity;

use App\Repository\PlantesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlantesRepository::class)
 */
class Plantes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Genre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Espece;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Cultivar;

    /**
     * @ORM\ManyToOne(targetEntity=Image::class, inversedBy="planteId")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idImage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGenre(): ?string
    {
        return $this->Genre;
    }

    public function setGenre(string $Genre): self
    {
        $this->Genre = $Genre;

        return $this;
    }

    public function getEspece(): ?string
    {
        return $this->Espece;
    }

    public function setEspece(string $Espece): self
    {
        $this->Espece = $Espece;

        return $this;
    }

    public function getCultivar(): ?string
    {
        return $this->Cultivar;
    }

    public function setCultivar(string $Cultivar): self
    {
        $this->Cultivar = $Cultivar;

        return $this;
    }


    public function getIdImage(): ?Image
    {
        return $this->idImage;
    }

    public function setIdImage(?Image $idImage): self
    {
        $this->idImage = $idImage;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

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
}
