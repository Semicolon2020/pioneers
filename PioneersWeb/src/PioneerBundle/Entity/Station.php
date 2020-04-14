<?php

namespace PioneerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Station
 *
 * @ORM\Table(name="station")
 * @ORM\Entity
 */
class Station
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=20, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtrajet", type="integer", nullable=false)
     */
    private $idtrajet;

    /**
     * @var float
     *
     * @ORM\Column(name="longtitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $longtitude;

    /**
     * @var float
     *
     * @ORM\Column(name="altitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $altitude;


}

