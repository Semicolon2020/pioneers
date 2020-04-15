<?php


namespace TransportBundle\Repository;


class BusetcovRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByName()
    {$id=1;
        $q=$this->getEntityManager()->createQuery(
            "SELECT s.num,s.nomparent,s.laltitude,s.longitude FROM TransportBundle:Busetcov s  WHERE s.d_o = '$id'   "
        );
        return $q->getResult();
    }
    public function findByNames()
    {$id=0;
        $q=$this->getEntityManager()->createQuery(
            "SELECT s.num,s.nomparent,s.laltitude,s.longitude FROM TransportBundle:Busetcov s  WHERE s.d_o = '$id'   "
        );
        return $q->getResult();
    }
}