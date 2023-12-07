<?php

namespace App\Repository;
use App\Data\SearchData;
use App\Form\SearchForm;

use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Article>
 *
 * @method Article|null find($id, $lockMode = null, $lockVersion = null)
 * @method Article|null findOneBy(array $criteria, array $orderBy = null)
 * @method Article[]    findAll()
 * @method Article[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
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
    

    
    /**
     * recupère les articles en lien avec une recherche
    * @return Article[] Returns an array of Article objects
    */
    public function findSearch(SearchData $search): array
    {
        $query = $this
            ->createQueryBuilder('a')
            ->select('c', 'a')
            ->join('a.categorie', 'c');

            if (!empty($search->q)) {
                $query = $query
                    ->andWhere('p.name LIKE :q')
                    ->setParameter('q', "%{$search->q}%");
            }
    
            if (!empty($search->min)) {
                $query = $query
                    ->andWhere('p.price >= :min')
                    ->setParameter('min', $search->min);
            }
    
            if (!empty($search->max)) {
                $query = $query
                    ->andWhere('p.price <= :max')
                    ->setParameter('max', $search->max);
            }
    

            return $query->getQuery()->getResult();
    }
    

    
    #rechercher un article par les Prix (AMx & Min)
    public function findByPrixRange($minVal, $maxVal)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.prix >= :minVal')
            ->setParameter('minVal', $minVal)
            ->andWhere('a.prix <= :maxVal')
            ->setParameter('maxVal', $maxVal)
            ->orderBy('a.prix', 'DESC')
            ->setMaxResults(100)
            ->getQuery()
            ->getResult()
        ;
    }

    # Tous les articles d'une categorie / Sport
    public function findByCategorieSport0()
    {
        $qb = $this->createQueryBuilder('a');
        $qb
            ->innerJoin('App\Entity\Categorie',  'c', 'WITH', 'c = a.categorie')
            ->where('c.titre like :titre')
            ->setParameter('titre', 'sport'); 
           // dump($qb->getQuery()->getResult());

        return $qb->getQuery()->getResult();
    }

    # Tous les articles d'une categorie / Sport
    public function findByCategorieSport1()
    {
        $qb = $this->createQueryBuilder('a');
        $qb
            ->innerJoin('App\Entity\Categorie',  'c', 'WITH', 'c = a.categorie')
            ->where('a.createdAt IS NOT NULL')
            ->andWhere('c.titre like :titre')
            ->setParameter('titre', 'sport'); 
           // dump($qb->getQuery()->getResult());

           return $qb->getQuery()->getResult();
        }



 # Tous les articles d'une categorie / Auto-moto
 public function findByCategorieatomoto()
 {
     $qb = $this->createQueryBuilder('a');
     
     $qb
         ->innerJoin('App\Entity\Categorie',  'c', 'WITH', 'c = a.categorie')
         ->where('a.createdAt IS NOT NULL')
         ->andWhere('c.titre like :titre')
         ->setParameter('titre', 'automoto'); 
        // dump($qb->getQuery()->getResult());

        return $qb->getQuery()->getResult();
     }
    
# Tous les articles d'une categorie / Jouets
 public function findByCategoriejouets()
 {
     $qb = $this->createQueryBuilder('a');
     
     $qb
         ->innerJoin('App\Entity\Categorie',  'c', 'WITH', 'c = a.categorie')
         ->where('a.createdAt IS NOT NULL')
         ->andWhere('c.titre like :titre')
         ->setParameter('titre', 'jouets'); 
        // dump($qb->getQuery()->getResult());

        return $qb->getQuery()->getResult();
     }

# Tous les articles d'une categorie / Informatiques
 public function findByCategorieinformatique()
 {
     $qb = $this->createQueryBuilder('a');
     
     $qb
         ->innerJoin('App\Entity\Categorie',  'c', 'WITH', 'c = a.categorie')
         ->where('a.createdAt IS NOT NULL')
         ->andWhere('c.titre like :titre')
         ->setParameter('titre', 'informatique'); 
        // dump($qb->getQuery()->getResult());

        return $qb->getQuery()->getResult();
     }

# Tous les articles d'une categorie / ElectroMenager
public function findByCategorielectrom()
{
    $qb = $this->createQueryBuilder('a');
    
    $qb
        ->innerJoin('App\Entity\Categorie',  'c', 'WITH', 'c = a.categorie')
        ->where('a.createdAt IS NOT NULL')
        ->andWhere('c.titre like :titre')
        ->setParameter('titre', 'electromenager'); 
       // dump($qb->getQuery()->getResult());

       return $qb->getQuery()->getResult();
    }



# Tous les articles d'une categorie / Meubles
public function findByCategoriemeubles()
{
    $qb = $this->createQueryBuilder('a');
    
    $qb
        ->innerJoin('App\Entity\Categorie',  'c', 'WITH', 'c = a.categorie')
        ->where('a.createdAt IS NOT NULL')
        ->andWhere('c.titre like :titre')
        ->setParameter('titre', 'meubles'); 
       // dump($qb->getQuery()->getResult());

       return $qb->getQuery()->getResult();
    }

//    /**
//     * @return Article[] Returns an array of Article objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Article
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
