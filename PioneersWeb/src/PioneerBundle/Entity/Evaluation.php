<?php

namespace PioneerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation", indexes={@ORM\Index(name="id_e", columns={"id_e"})})
 * @ORM\Entity
 */
class Evaluation
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
     * @var float
     *
     * @ORM\Column(name="score", type="float", precision=10, scale=0, nullable=false)
     */
    private $score;

    /**
     * @var string
     *
     * @ORM\Column(name="remarque", type="string", length=255, nullable=false)
     */
    private $remarque;

    /**
     * @var string
     *
     * @ORM\Column(name="activite", type="string", length=32, nullable=false)
     */
    private $activite;

    /**
     * @var \Enfant
     *
     * @ORM\ManyToOne(targetEntity="Enfant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_e", referencedColumnName="id_e")
     * })
     */
    private $idE;


}

