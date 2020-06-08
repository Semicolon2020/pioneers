<?php

namespace PioneerBundle\Repository;

/**
 *UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{

    function Auth($username,$password){
        $query=$this->getEntityManager()
            ->createQuery("select d from PioneerBundle:User  d where d.username=:u and d.password=:p ")
        ->setParameter('u',$username)
            ->setParameter('p',$password);
        return $query->getResult();
    }


}