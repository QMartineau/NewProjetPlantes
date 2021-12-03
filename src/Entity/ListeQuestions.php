<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use App\Repository\ListeQuestionsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ListeQuestionsRepository::class)
 */
class ListeQuestions{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    private Questions $question; 
    private  array $reponses;  


    public function __construct(){
        $this->questions = new ArrayCollection();
    }
    
        
    public function getQuestion(): ?Questions
    {
        return $this->question; 
    }

    public function setQuestion(Questions $question): void
    {
        $this->question = $question;
    }

    public function getReponses(): ?array{
       return $this->reponses; 
    }

    public function setReponses(array $reponses): void
    {
        $this->reponses = $reponses;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

}
