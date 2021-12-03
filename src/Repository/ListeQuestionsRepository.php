<?php

namespace App\Repository;

use App\Entity\ListeQuestions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ListeQuestions|null find($id, $lockMode = null, $lockVersion = null)
 * @method ListeQuestions|null findOneBy(array $criteria, array $orderBy = null)
 * @method ListeQuestions[]    findAll()
 * @method ListeQuestions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ListeQuestionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ListeQuestions::class);
    }

    // /**
    //  * @return ListeQuestions[] Returns an array of ListeQuestions objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ListeQuestions
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
