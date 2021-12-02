<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    private $question;
 
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Reponses", mappedBy="questions")
     */
    private $reponses;
 
    public function __construct()
    {
        return $this->id;
        $this->reponses = new ArrayCollection();
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
 
    public function getQuestion(): ?string
    {
        return $this->question;
    }
 
    public function setQuestion(string $question): self
    {
        $this->question = $question;
 
        return $this;
    }
 
    /**
     * @return Collection|Reponses[]
     */
    public function getReponses(): Collection
    {
        return $this->reponses;
    }
 
    public function addReponse(Reponses $reponse): self
    {
        if (!$this->reponses->contains($reponse)) {
            $this->reponses[] = $reponse;
            $reponse->setQuestions($this);
        }
 
        return $this;
    }
 
    public function removeReponse(Reponses $reponse): self
    {
        if ($this->reponses->contains($reponse)) {
            $this->reponses->removeElement($reponse);
            // set the owning side to null (unless already changed)
            if ($reponse->getQuestions() === $this) {
                $reponse->setQuestions(null);
            }
        }
 
        return $this;
    }


}
