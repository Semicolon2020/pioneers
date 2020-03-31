<?php

namespace PioneerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours")
 * @ORM\Entity
 */
class Cours
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_c", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idC;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=32, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=16, nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="tuteur", type="string", length=32, nullable=false)
     */
    private $tuteur;


}

