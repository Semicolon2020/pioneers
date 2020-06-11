<?php

namespace PioneerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Suivi
 *
 * @ORM\Table(name="suivi", indexes={@ORM\Index(name="id_e", columns={"id_e"})})
 *  @ORM\Entity(repositoryClass="PioneerBundle\Repository\SuiviRepository")
 */
class Suivi
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
    public function getNutrition()
    {
        return $this->nutrition;
    }

    /**
     * @param string $nutrition
     */
    public function setNutrition($nutrition)
    {
        $this->nutrition = $nutrition;
    }

    /**
     * @return string
     */
    public function getSommeil()
    {
        return $this->sommeil;
    }

    /**
     * @param string $sommeil
     */
    public function setSommeil($sommeil)
    {
        $this->sommeil = $sommeil;
    }

    /**
     * @return string
     */
    public function getSociabilite()
    {
        return $this->sociabilite;
    }

    /**
     * @param string $sociabilite
     */
    public function setSociabilite($sociabilite)
    {
        $this->sociabilite = $sociabilite;
    }

    /**
     * @return string
     */
    public function getPsychologie()
    {
        return $this->psychologie;
    }

    /**
     * @param string $psychologie
     */
    public function setPsychologie($psychologie)
    {
        $this->psychologie = $psychologie;
    }

    /**
     * @return \Enfant
     */
    public function getIdE()
    {
        return $this->idE;
    }

    /**
     * @param \Enfant $idE
     */
    public function setIdE($idE)
    {
        $this->idE = $idE;
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

