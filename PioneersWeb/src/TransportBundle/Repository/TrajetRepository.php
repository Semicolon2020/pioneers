<?php

namespace TransportBundle\Repository;

/**
 * ClubRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TrajetRepository extends \Doctrine\ORM\EntityRepository
{
    public function findBytrajets($id)
    {
        $q=$this->getEntityManager()->createQuery(
            "DELETE FROM TransportBundle:Station s  WHERE s.idtrajet= '$id'   "
        );
        return $q->getResult();
    }



    public function findByIdbus()
    {
        $q=$this->getEntityManager()->createQuery(
            "SELECT t.id, t.name,t.idbus,(SELECT b.name FROM TransportBundle:Bus b  where  t.idbus = b.id )nombus,(SELECT s.idtrajet FROM TransportBundle:Station s  where t.id = s.idtrajet group by s.idtrajet )find FROM TransportBundle:Trajet t  "
        );
        return $q->getResult();
    }
    public function findByIdbus2()
    {
        $q=$this->getEntityManager()->createQuery(
            "SELECT b.id,b.name from TransportBundle:Bus b where b.id NOT IN (SELECT t.idbus From TransportBundle:Trajet t)" );
        return $q->getResult();
    }
    public function findByName($id)
    {
        $q=$this->getEntityManager()->createQuery(
            "SELECT s.name FROM TransportBundle:Trajet s WHERE s.name= '$id'" );
        return $q->getResult();
    }
    public function findBysame($id)
    {
        $q=$this->getEntityManager()->createQuery(
            "SELECT b.id,b.name from TransportBundle:Bus b where b.id IN (SELECT t.idbus From TransportBundle:Trajet t where t.id='$id') " );
        return $q->getResult();
    }
}