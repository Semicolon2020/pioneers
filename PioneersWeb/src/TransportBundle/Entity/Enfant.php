<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enfant
 *
 * @ORM\Table(name="enfant")
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
     * @var integer
     *
     * @ORM\Column(name="cin_p", type="integer", nullable=false)
     */
    private $cinP;


}

