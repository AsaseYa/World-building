<?php

namespace App\Repository;

use App\Entity\Familyhood;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Familyhood|null find($id, $lockMode = null, $lockVersion = null)
 * @method Familyhood|null findOneBy(array $criteria, array $orderBy = null)
 * @method Familyhood[]    findAll()
 * @method Familyhood[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FamilyhoodRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Familyhood::class);
    }

    // /**
    //  * @return Familyhood[] Returns an array of Familyhood objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Familyhood
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
