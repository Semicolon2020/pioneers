<?php

namespace PioneerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jeux
 *
 * @ORM\Table(name="jeux")
 * @ORM\Entity
 */
class Jeux
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_j", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idJ;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=32, nullable=false)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="score", type="integer", nullable=false)
     */
    private $score;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_e", type="integer", nullable=false)
     */
    private $idE;


}

