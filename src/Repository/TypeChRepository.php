<?php

namespace App\Repository;

use App\Entity\TypeCh;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeCh|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeCh|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeCh[]    findAll()
 * @method TypeCh[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeChRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeCh::class);
    }

    // /**
    //  * @return TypeCh[] Returns an array of TypeCh objects
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
    public function findOneBySomeField($value): ?TypeCh
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
