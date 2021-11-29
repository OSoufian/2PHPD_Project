<?php

namespace App\Repository;

use App\Entity\TODOList;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TODOList|null find($id, $lockMode = null, $lockVersion = null)
 * @method TODOList|null findOneBy(array $criteria, array $orderBy = null)
 * @method TODOList[]    findAll()
 * @method TODOList[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TODOListRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TODOList::class);
    }

    // /**
    //  * @return TODOList[] Returns an array of TODOList objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TODOList
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
