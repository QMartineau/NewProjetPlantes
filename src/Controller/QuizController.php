<?php

namespace App\Controller;

use App\Entity\Reponses;
use App\Repository\QuestionsRepository;
use App\Repository\ReponsesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class QuizController extends AbstractController
{
    #[Route('/quiz/{id}', name: 'quiz')]
    public function index(int $id,QuestionsRepository $questionsRepository, ReponsesRepository $reponsesRepository): Response
    {
        
        $questions = $questionsRepository->findAll();


        $tab_quest =[];

        foreach($questions as $data)
        {
            $tab_quest[] = $data ->getQuestion();
        }

        // dd($tab_quest);
    
        $reponses = $reponsesRepository->findBy(array('questions' => $id));
        
        $tab_rep = [];

        foreach($reponses as $item)
        {
            $tab_rep [] = $item->getReponse();
        }
    
      

        

        //  dd($tab_rep);
        
        
        if (!$questions) {
            throw $this->createNotFoundException('La table est vide question');
        }
        if (!$reponses) {
            throw $this->createNotFoundException('La table est vide reponses');
        }
        
        
        //Crer une liste de questions 
        //pour chaque question que tu vas trouver dans ta base de données 
        //tu vas aller chercher toute les réponse qui sont rataché a cette question

        return $this->render('quiz/index.html.twig', [
            'controller_name' => 'QuizController',
            'questions' => $tab_quest,
            'reponses' => $tab_rep,
            
            
            
        ]);
    }

}
    // class ListeQuestions{

    //     // public Questions $question = new Questions(); 
    //     // public list<Reponses> $Reponses = new list<Reponses>();  
    // }