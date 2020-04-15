<?php

namespace TransportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trajet
 *
 * @ORM\Table(name="trajet", uniqueConstraints={@ORM\UniqueConstraint(name="Name", columns={"Name"}), @ORM\UniqueConstraint(name="bus_name", columns={"idbus"})})
 * @ORM\Entity(repositoryClass="TransportBundle\Repository\TrajetRepository")
 */
class Trajet
{


    /**
     * @ORM\OneToOne(targetEntity="TransportBundle\Entity\Bus", cascade={"persist"})
     */
    /**
     * @return int
     */
    public function getIdbus()
    {
        return $this->idbus;
    }

    /**
     * @param int $idbus
     */
    public function setIdbus($idbus)
    {
        $this->idbus = $idbus;
    }
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
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
     * @ORM\Column(name="idbus", type="integer", nullable=false)
     */
    private $idbus;


}

