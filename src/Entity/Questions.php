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
    private $bonneReponse;


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

    public function getBonneReponse(): ?Reponses
    {
        return $this->bonneReponse;
    }

    public function setBonneReponse(?Reponses $bonneReponse): self
    {
        $this->bonneReponse = $bonneReponse;

        return $this;
    }


}
