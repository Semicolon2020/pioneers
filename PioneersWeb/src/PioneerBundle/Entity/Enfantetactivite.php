<?php

namespace PioneerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enfantetactivite
 *
 * @ORM\Table(name="enfantetactivite", indexes={@ORM\Index(name="id_e", columns={"id_e"})})
 * @ORM\Entity
 */
class Enfantetactivite
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
     * @var integer
     *
     * @ORM\Column(name="id_ac", type="integer", nullable=false)
     */
    private $idAc;

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

