<?php

namespace App\Repository;

use App\Entity\Utilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Utilisateur>
 *
 * @method Utilisateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Utilisateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Utilisateur[]    findAll()
 * @method Utilisateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UtilisateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Utilisateur::class);
    }

    
    /**
    * @return Users[] Returns an array of Users objects
    */
    public function getTriAsc(string $champ): array
    {
        $query = $this->createQueryBuilder('u')
            ->select('u')
            ->orderBy('u.' . $champ, 'ASC')
            ->getQuery();
        return $query->getResult();
    }

    
    public function rechUtilAge($dateMin, $dateMax): array
    {
        $query = $this->createQueryBuilder('u')
         // ->select('u')
            ->where('u.datenaiss <= :datemax')
            ->andWhere('u.datenaiss >= :datemin')
            ->setParameters(
                array('datemin'=> $dateMin,
                    'datemax'=> $dateMax,
                    )
            )
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery();
        return $query->getResult();
    }


    

//    /**
//     * @return Utilisateur[] Returns an array of Utilisateur objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Utilisateur
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}