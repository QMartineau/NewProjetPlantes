<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Plantes;
use App\Repository\PlantesRepository;

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
    public function showSingleEvent(int $id , PlantesRepository $PlantesRepository): Response
    {
        
        $Image = $PlantesRepository->find($id) ;
        if (!$Image) {
            throw $this->createNotFoundException('La table est vide');
        }
            
        return $this->render('home/single.html.twig', [
            'Image' => $Image
        ]);
    }
}


