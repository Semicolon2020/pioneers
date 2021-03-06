<?php

namespace PioneerBundle\Repository;

/**
 * SuiviRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SuiviRepository extends \Doctrine\ORM\EntityRepository
{

    function findAllOrderby(){
        $query=$this->getEntityManager()
            ->createQuery("select d from PioneerBundle:Suivi d ORDER BY d.id DESC  ");
        //->setParameter('n',$val);
        //->setParameter('n','%'.$val.'%');
        return $query->getResult();
    }


    function AvgAbs($idAc)
    {
        dump($idAc);
        $query=$this->getEntityManager()
            ->createQuery(' Select score from PioneerBundle:Suivi a where  a.id_ac=:idAc')
            ->setParameter('idAc',$idAc);
        dump($query->getResult());
        return $query->getResult();

    }

    function findAllOrderbyE($id){
        $query=$this->getEntityManager()
            ->createQuery("select d from PioneerBundle:Suivi d where d.idE=:idE ORDER BY d.id DESC ")
        ->setParameter('idE',$id);
        return $query->getResult();
    }




}