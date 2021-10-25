<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
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
                    ->setChoices([  
                            'User' => 'ROLE_USER',
                            'Admin' => 'ROLE_ADMIN'
                            ])
                            ->allowMultipleChoices()
                            ->renderExpanded(true),
            BooleanField::new('is_verified'),
        ];
    }
}
