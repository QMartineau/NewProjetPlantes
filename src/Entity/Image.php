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
    private $avecFeilles;

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
    private $cultivar;

    /**
     * @ORM\OneToMany(targetEntity=Plantes::class, mappedBy="idImage")
     */
    private $planteId;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avecFeuilles;

    public function __construct()
    {
        $this->planteId = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAvecFeilles(): ?string
    {
        return $this->avecFeilles;
    }

    public function setAvecFeilles(?string $avecFeilles): self
    {
        $this->avecFeilles = $avecFeilles;

        return $this;
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

    public function getCultivar(): ?string
    {
        return $this->cultivar;
    }

    public function setCultivar(?string $cultivar): self
    {
        $this->cultivar = $cultivar;

        return $this;
    }

    /**
     * @return Collection|Plantes[]
     */
    public function getPlanteId(): Collection
    {
        return $this->planteId;
    }

    public function addPlanteId(Plantes $planteId): self
    {
        if (!$this->planteId->contains($planteId)) {
            $this->planteId[] = $planteId;
            $planteId->setIdImage($this);
        }

        return $this;
    }

    public function removePlanteId(Plantes $planteId): self
    {
        if ($this->planteId->removeElement($planteId)) {
            // set the owning side to null (unless already changed)
            if ($planteId->getIdImage() === $this) {
                $planteId->setIdImage(null);
            }
        }

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
}
