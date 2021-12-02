<?php

namespace App\Entity;

use App\Repository\ReponsesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReponsesRepository::class)
 */
class Reponses
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

   /**
     * @ORM\Column(type="integer", name="idQuestion")
     */
    private $idQuestion;
 
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reponse;
 
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Questions", inversedBy="reponses")
     * @ORM\JoinColumn(nullable=false)
     */
    private $questions;
 
 
    public function getIdReponse(): ?int
    {
        return $this->id;
        return $this->idReponse;
    }
 
    public function setIdReponse(int $idReponse): self
    {
        $this->idReponse = $idReponse;
 
        return $this;
    }
 
    public function getIdQuestion(): ?int
    {
        return $this->idQuestion;
    }
 
    public function setIdQuestion(int $idQuestion): self
    {
        $this->idQuestion = $idQuestion;
 
        return $this;
    }
 
    public function getReponse(): ?string
    {
        return $this->reponse;
    }
 
    public function setReponse(string $reponse): self
    {
        $this->reponse = $reponse;
 
        return $this;
    }
 
    public function getQuestions(): ?Questions
    {
        return $this->questions;
    }
 
    public function setQuestions(?Questions $questions): self
    {
        $this->questions = $questions;
 
        return $this;
    }
}
