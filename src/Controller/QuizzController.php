<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuizzController extends AbstractController
{
    #[Route('/quizz', name: 'quizz')]
    public function index(): Response
    {
        return $this->render('quizz/index.html.twig', [
            'controller_name' => 'QuizzController',
        ]);
    }
}
