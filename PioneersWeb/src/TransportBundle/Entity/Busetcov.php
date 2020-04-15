<?php

namespace TransportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BusetcovController
 *
 * @ORM\Table(name="busetcov", uniqueConstraints={@ORM\UniqueConstraint(name="cin_p", columns={"cin_p"})})
 * @ORM\Entity(repositoryClass="TransportBundle\Repository\BusetcovRepository")
 */
class Busetcov
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
    public function getCinP()
    {
        return $this->cinP;
    }

    /**
     * @param string $cinP
     */
    public function setCinP($cinP)
    {
        $this->cinP = $cinP;
    }

    /**
     * @return int
     */
    public function getNombreEnfant()
    {
        return $this->nombreEnfant;
    }

    /**
     * @param int $nombreEnfant
     */
    public function setNombreEnfant($nombreEnfant)
    {
        $this->nombreEnfant = $nombreEnfant;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return float
     */
    public function getLaltitude()
    {
        return $this->laltitude;
    }

    /**
     * @param float $laltitude
     */
    public function setLaltitude($laltitude)
    {
        $this->laltitude = $laltitude;
    }

    /**
     * @return int
     */
    public function getIdTrajet()
    {
        return $this->idTrajet;
    }

    /**
     * @param int $idTrajet
     */
    public function setIdTrajet($idTrajet)
    {
        $this->idTrajet = $idTrajet;
    }

    /**
     * @return int
     */
    public function getd_o()
    {
        return $this->d_o;
    }

    /**
     * @param int $dO
     */
    public function setd_o($d_o)
    {
        $this->d_o = $d_o;
    }

    /**
     * @return int
     */
    public function getInscrit()
    {
        return $this->inscrit;
    }

    /**
     * @param int $inscrit
     */
    public function setInscrit($inscrit)
    {
        $this->inscrit = $inscrit;
    }

    /**
     * @return string
     */
    public function getNomparent()
    {
        return $this->nomparent;
    }

    /**
     * @param string $nomparent
     */
    public function setNomparent($nomparent)
    {
        $this->nomparent = $nomparent;
    }

    /**
     * @return string
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param string $num
     */
    public function setNum($num)
    {
        $this->num = $num;
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
    private $d_o = '0';

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

