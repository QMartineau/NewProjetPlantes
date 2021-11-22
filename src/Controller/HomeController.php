<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\PlantesRepository;
use App\Repository\ImageRepository;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Plantes;
use App\Entity\Image;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    
    #[Route('/home/plantes', name: 'listing')]
    public function ToutLesPlantes( PlantesRepository $plantesRepository): Response
    {
        
        $Plantes = $plantesRepository->findAll() ;
        
        return $this->render('home/test.html.twig', [
            'Plantes' => $Plantes
        ]);
    }


    #[Route('/home/{id}', name: 'single')]
    public function showSingleEvent(int $id, PlantesRepository $plantesRepository, ImageRepository $imageRepository): Response
    {
        $Culti = $imageRepository->find($id) ;
        $Plante = $plantesRepository->find($id) ;
        if (!$Plante) {
            throw $this->createNotFoundException('La table est vide');
        }
        
        if (!$Culti) {
            throw $this->createNotFoundException('La table est vide');
        }

        return $this->render('home/single.html.twig', [
            'Plante' => $Plante,
            'Culti' => $Culti

        ]);


        
        
    }
    
}


