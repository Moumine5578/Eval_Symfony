<?php

namespace App\Repository;

use App\Entity\Relevés;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Relevés>
 *
 * @method Relevés|null find($id, $lockMode = null, $lockVersion = null)
 * @method Relevés|null findOneBy(array $criteria, array $orderBy = null)
 * @method Relevés[]    findAll()
 * @method Relevés[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RelevésRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Relevés::class);
    }

//    /**
//     * @return Relevés[] Returns an array of Relevés objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Relevés
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
