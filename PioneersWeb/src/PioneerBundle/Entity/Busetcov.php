<?php

namespace PioneerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Busetcov
 *
 * @ORM\Table(name="busetcov")
 * @ORM\Entity
 */
class Busetcov
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
     * @ORM\Column(name="cin_p", type="string", length=8, nullable=false)
     */
    private $cinP;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_enfant", type="integer", nullable=false)
     */
    private $nombreEnfant = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $longitude = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="laltitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $laltitude = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_trajet", type="integer", nullable=false)
     */
    private $idTrajet = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="d_o", type="integer", nullable=false)
     */
    private $dO = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="inscrit", type="integer", nullable=false)
     */
    private $inscrit = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nomparent", type="string", length=255, nullable=false)
     */
    private $nomparent;

    /**
     * @var string
     *
     * @ORM\Column(name="num", type="string", length=8, nullable=false)
     */
    private $num;


}

