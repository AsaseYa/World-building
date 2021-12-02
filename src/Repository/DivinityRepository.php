<?php

namespace App\Repository;

use App\Entity\Divinity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Divinity|null find($id, $lockMode = null, $lockVersion = null)
 * @method Divinity|null findOneBy(array $criteria, array $orderBy = null)
 * @method Divinity[]    findAll()
 * @method Divinity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DivinityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Divinity::class);
    }

    // /**
    //  * @return Divinity[] Returns an array of Divinity objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Divinity
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
