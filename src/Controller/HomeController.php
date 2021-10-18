<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\PlantesRepository;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Plantes;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/home/{id}', name: 'home_single')]
    public function showSingleEvent(int $id , PlantesRepository $plantesRepository): Response
    {
        
        $Plantes = $plantesRepository->find($id) ;
        if (!$Plantes) {
            throw $this->createNotFoundException('La table est vide');
        }
            
        return $this->render('home/test.html.twig', [
            'Plantes' => $Plantes
        ]);
    }
}


