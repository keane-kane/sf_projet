<?php

namespace App\Repository;

use App\Entity\EtudiantComplet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EtudiantComplet|null find($id, $lockMode = null, $lockVersion = null)
 * @method EtudiantComplet|null findOneBy(array $criteria, array $orderBy = null)
 * @method EtudiantComplet[]    findAll()
 * @method EtudiantComplet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EtudiantCompletRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EtudiantComplet::class);
    }

    // /**
    //  * @return EtudiantComplet[] Returns an array of EtudiantComplet objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EtudiantComplet
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
