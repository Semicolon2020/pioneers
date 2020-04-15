<?php

namespace TransportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Station
 *
 * @ORM\Table(name="station", uniqueConstraints={@ORM\UniqueConstraint(name="Name", columns={"Name"})})
 * @ORM\Entity(repositoryClass="TransportBundle\Repository\StationRepository")
 */
class Station
{
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
     * @return int
     */
    public function getIdtrajet()
    {
        return $this->idtrajet;
    }

    /**
     * @param int $idtrajet
     */
    public function setIdtrajet($idtrajet)
    {
        $this->idtrajet = $idtrajet;
    }

    /**
     * @return float
     */
    public function getLongtitude()
    {
        return $this->longtitude;
    }

    /**
     * @param float $longtitude
     */
    public function setLongtitude($longtitude)
    {
        $this->longtitude = $longtitude;
    }

    /**
     * @return float
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * @param float $altitude
     */
    public function setAltitude($altitude)
    {
        $this->altitude = $altitude;
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

