<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            TextField::new('prenom'),
            TextField::new('email'),
            TextField::new('password'),
            TextField::new('telephone'),
            ChoiceField::new('roles', 'Roles')
                    ->autocomplete()
                    ->setChoices([  
                            'Elève' => 'ROLE_USER',
                            'Formateur' => 'ROLE_ADMIN'
                            ])
        ];
    }
}
