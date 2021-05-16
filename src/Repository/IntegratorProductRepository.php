<?php

namespace App\Repository;

use App\Entity\IntegratorProduct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method IntegratorProduct|null find($id, $lockMode = null, $lockVersion = null)
 * @method IntegratorProduct|null findOneBy(array $criteria, array $orderBy = null)
 * @method IntegratorProduct[]    findAll()
 * @method IntegratorProduct[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IntegratorProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IntegratorProduct::class);
    }

    // /**
    //  * @return IntegratorProduct[] Returns an array of IntegratorProduct objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?IntegratorProduct
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
