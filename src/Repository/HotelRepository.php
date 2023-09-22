<?php

namespace App\Repository;

use App\Entity\Hotel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Hotel>
 *
 * @method Hotel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hotel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hotel[]    findAll()
 * @method Hotel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HotelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hotel::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Hotel $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Hotel $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function customFilter($filters): ?array
    {
        $message = 'Invalid filters!';
        $result = false;
        if (
            !empty($filters)
            && is_array($filters)
        ) {
            $query = $this->createQueryBuilder('h');

            foreach ($filters as $filter) {
                if (
                    !empty($filter)
                    && is_array($filters)
                    && isset($filters['column'])
                    && isset($filters['operation'])
                    && isset($filters['value'])
                ) {
                    $query->andWhere(
                        "h.{$filters['column']} {$filters['operation']} :{$filters['column']}"
                    );
                    $query->setParameter($filters['column'], $filters['value']);
                } else {
                    throw new \Exception($message);
                }
            }

            $result = $query->setMaxResults(10)
                ->getQuery()
                ->getResult();
        }
        return $result;
    }

    /**
     * @return Hotel[] Returns an array of Hotel objects
     */
    public function findByExampleField($value = 1)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.id = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    /*
    public function findOneBySomeField($value): ?Hotel
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
