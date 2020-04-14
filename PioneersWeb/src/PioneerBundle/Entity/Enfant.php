<?php

namespace PioneerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enfant
 *
 * @ORM\Table(name="enfant", indexes={@ORM\Index(name="cin_p", columns={"cin_p"})})
 * @ORM\Entity
 */
class Enfant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_e", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idE;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=32, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=32, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=10, nullable=false)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="cin_p", type="string", length=8, nullable=false)
     */
    private $cinP;

    /**
     * @var string
     *
     * @ORM\Column(name="age", type="string", length=1, nullable=false)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=false)
     */
    private $photo;


}

