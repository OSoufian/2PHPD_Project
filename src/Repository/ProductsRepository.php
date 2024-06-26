<?php

namespace App\Repository;

use App\Entity\Products;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/** 
 * @method Products|null find($id, $lockMode = null, $lockVersion = null)
 * @method Products|null findOneBy(array $criteria, array $orderBy = null)
 * @method Products[]    findAll()
 * @method Products[]    findOneBySomeField(string $value)
 * @method Products[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Products::class);
    }

    public function getAll(): array
    {
        return $this->findAll();
    }


    public function findBySearch($value): ?array
    {
        return $this->createQueryBuilder('p')
            ->where('p.name LIKE :val')
            ->setParameter('val', "%" . $value . "%")
            ->getQuery()
            ->getResult(); 
    }

    public function findById($value): ?array
    {
        return $this->createQueryBuilder('p')
            ->where('p.id = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult();            
    }

    public function findOneBySomeField($value): ?array
    {
        return $this->createQueryBuilder('p')
            ->where('p.name LIKE :val')
            ->setParameter('val', "%" . $value . "%")
            ->getQuery()
            ->getResult();            
    }
}