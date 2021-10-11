<?php

namespace App\Entity;

use App\Repository\QcmRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QcmRepository::class)
 */
class Qcm
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
    private $question;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $resultat;

    /**
     * @ORM\ManyToMany(targetEntity=Plantes::class)
     */
    private $IdPlantes;

    public function __construct()
    {
        $this->IdPlantes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getResultat(): ?string
    {
        return $this->resultat;
    }

    public function setResultat(string $resultat): self
    {
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * @return Collection|Plantes[]
     */
    public function getIdPlantes(): Collection
    {
        return $this->IdPlantes;
    }

    public function addIdPlante(Plantes $idPlante): self
    {
        if (!$this->IdPlantes->contains($idPlante)) {
            $this->IdPlantes[] = $idPlante;
        }

        return $this;
    }

    public function removeIdPlante(Plantes $idPlante): self
    {
        $this->IdPlantes->removeElement($idPlante);

        return $this;
    }
}
