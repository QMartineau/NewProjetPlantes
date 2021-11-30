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
    public function index( int $id , QuestionsRepository $questionsRepository, ReponsesRepository $reponsesRepository): Response
    {
        
        $Ques = $questionsRepository->findAll($id) ;
        $Cultis = $reponsesRepository->findby(array('question' => $id)) ;

        $tab_rep = [];

        foreach($Cultis as $item)
        {
            $tab_rep [] = $item->getIntitule();
        }
        // $Qest = $questionsRepository->findAll(); 
        


        // dd($tab_rep);
        if (!$Cultis) {
            throw $this->createNotFoundException('La table est vide');
        }
        if (!$Ques) {
            throw $this->createNotFoundException('La table est vide');
        }
        
        //Crer une liste de questions 
        //pour chaque question que tu vas trouver dans ta base de données 
        //tu vas aller chercher toute les réponse qui sont rataché a cette question

        return $this->render('quiz/index.html.twig', [
            'controller_name' => 'QuizController',
            'Ques' => $tab_rep,
            'quiz' => $Ques,
            
        ]);
    }

}
    // class ListeQuestions{

    //     // public Questions $question = new Questions(); 
    //     // public list<Reponses> $Reponses = new list<Reponses>();  
    // }