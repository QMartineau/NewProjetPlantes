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
     * @ORM\OneToMany(targetEntity=Image::class, mappedBy="plantes")
     */
    private $imageId;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

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

    /**
     * @return Collection|Image[]
     */
    public function getImageId(): Collection
    {
        return $this->imageId;
    }

    public function addImageId(Image $imageId): self
    {
        if (!$this->imageId->contains($imageId)) {
            $this->imageId[] = $imageId;
            $imageId->setPlantes($this);
        }

        return $this;
    }

    public function removeImageId(Image $imageId): self
    {
        if ($this->imageId->removeElement($imageId)) {
            // set the owning side to null (unless already changed)
            if ($imageId->getPlantes() === $this) {
                $imageId->setPlantes(null);
            }
        }

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
