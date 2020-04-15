<?php


namespace TransportBundle\Repository;


class StationRepository  extends \Doctrine\ORM\EntityRepository
{
    public function findBytrajet($id)
    {
        $q=$this->getEntityManager()->createQuery(
            "SELECT s.id,s.name,s.longtitude,s.altitude,s.idtrajet  FROM TransportBundle:Station s  WHERE s.idtrajet= '$id'   "
        );
        return $q->getResult();
    }
    public function findByName($id)
    {
        $q=$this->getEntityManager()->createQuery(
            "SELECT s.name FROM TransportBundle:Station s  WHERE s.name= '$id'   "
        );
        return $q->getResult();
    }
}