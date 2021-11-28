<?php

namespace App\Entity;

use App\Repository\QuestionsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QuestionsRepository::class)
 */
class Questions
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
    private $intitule;

    /**
     * @ORM\OneToOne(targetEntity=Reponses::class, cascade={"persist", "remove"})
     */
    private $reponse1;

    /**
     * @ORM\OneToOne(targetEntity=Reponses::class, cascade={"persist", "remove"})
     */
    private $reponse2;

    /**
     * @ORM\OneToOne(targetEntity=Reponses::class, cascade={"persist", "remove"})
     */
    private $reponse3;

    /**
     * @ORM\OneToOne(targetEntity=Reponses::class, cascade={"persist", "remove"})
     */
    private $reponse4;

    /**
     * @ORM\OneToOne(targetEntity=Reponses::class, cascade={"persist", "remove"})
     */
    private $reponseBon;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntitule(): ?string
    {
        return $this->intitule;
    }

    public function setIntitule(string $intitule): self
    {
        $this->intitule = $intitule;

        return $this;
    }

    public function getReponse1(): ?Reponses
    {
        return $this->reponse1;
    }

    public function setReponse1(?Reponses $reponse1): self
    {
        $this->reponse1 = $reponse1;

        return $this;
    }

    public function getReponse2(): ?Reponses
    {
        return $this->reponse2;
    }

    public function setReponse2(?Reponses $reponse2): self
    {
        $this->reponse2 = $reponse2;

        return $this;
    }

    public function getReponse3(): ?Reponses
    {
        return $this->reponse3;
    }

    public function setReponse3(?Reponses $reponse3): self
    {
        $this->reponse3 = $reponse3;

        return $this;
    }

    public function getReponse4(): ?Reponses
    {
        return $this->reponse4;
    }

    public function setReponse4(?Reponses $reponse4): self
    {
        $this->reponse4 = $reponse4;

        return $this;
    }

    public function getReponseBon(): ?Reponses
    {
        return $this->reponseBon;
    }

    public function setReponseBon(?Reponses $reponseBon): self
    {
        $this->reponseBon = $reponseBon;

        return $this;
    }

    
}
