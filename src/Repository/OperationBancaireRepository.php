<?php

namespace App\Repository;

use App\Entity\OperationBancaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OperationBancaire>
 *
 * @method OperationBancaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method OperationBancaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method OperationBancaire[]    findAll()
 * @method OperationBancaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OperationBancaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OperationBancaire::class);
    }

    public function save(OperationBancaire $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OperationBancaire $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    
//    /**
//     * @return OperationBancaire[] Returns an array of OperationBancaire objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?OperationBancaire
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
