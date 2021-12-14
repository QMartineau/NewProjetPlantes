<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Plantes;
// use App\Entity\Qcm;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(AdminUrlGenerator::class);
        return $this->redirect($routeBuilder->setController(UserCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('ProjetPlantes');
    }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linkToDashboard('Dashboard', 'fa fa-chess-board'),
            MenuItem::linkToRoute('Home', 'fa fa-home', 'home'),
            MenuItem::linkToCrud('Users', 'fas fa-child', User::class),
            MenuItem::linkToCrud('Plantes', 'fas fa-leaf', Plantes::class),
        ];
    }
}
