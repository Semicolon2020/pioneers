<?php

namespace PioneerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Suivi
 *
 * @ORM\Table(name="suivi", indexes={@ORM\Index(name="id_e", columns={"id_e"})})
 * @ORM\Entity
 */
class Suivi
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
     * @ORM\Column(name="nutrition", type="string", length=255, nullable=false)
     */
    private $nutrition;

    /**
     * @var string
     *
     * @ORM\Column(name="sommeil", type="string", length=255, nullable=false)
     */
    private $sommeil;

    /**
     * @var string
     *
     * @ORM\Column(name="sociabilite", type="string", length=255, nullable=false)
     */
    private $sociabilite;

    /**
     * @var string
     *
     * @ORM\Column(name="psychologie", type="text", length=65535, nullable=false)
     */
    private $psychologie;

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

