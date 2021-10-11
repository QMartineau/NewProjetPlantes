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
     * @ORM\Column(type="string", length=255)
     */
    private $Image;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Verified;

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

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(string $Image): self
    {
        $this->Image = $Image;

        return $this;
    }

    public function getVerified(): ?bool
    {
        return $this->Verified;
    }

    public function setVerified(bool $Verified): self
    {
        $this->Verified = $Verified;

        return $this;
    }
}
