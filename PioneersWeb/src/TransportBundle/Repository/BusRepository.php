<?php


namespace TransportBundle\Repository;


class BusRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByName($id)
    {
        $q=$this->getEntityManager()->createQuery(
            "SELECT s.name FROM TransportBundle:Bus s  WHERE s.name= '$id'   "
        );
        return $q->getResult();
    }
    public function findByNames($id,$id2)
    {
        $q=$this->getEntityManager()->createQuery(
            "SELECT s.chauffeur FROM TransportBundle:Bus s  WHERE s.chauffeur= '$id' and s.id!='$id2'   "
        );
        return $q->getResult();
    }
}