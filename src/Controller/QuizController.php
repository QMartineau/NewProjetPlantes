<?php

namespace App\Controller;

use App\Entity\Reponses;
use App\Repository\QuestionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class QuizController extends AbstractController
{
    #[Route('/quiz', name: 'quiz')]
    public function index( QuestionsRepository $questionsRepository): Response
    {
        $Qest = $questionsRepository->findAll(); 
        dd($Qest);
        //Crer une liste de questions 
        //pour chaque question que tu vas trouver dans ta base de données 
        //tu vas aller chercher toute les réponse qui sont rataché a cette question

        return $this->render('quiz/index.html.twig', [
            'controller_name' => 'QuizController',
             'quiz' => $Qest,
        ]);
    }

}
    // class ListeQuestions{

    //     // public Questions $question = new Questions(); 
    //     // public list<Reponses> $Reponses = new list<Reponses>();  
    // }