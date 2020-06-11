<?php

namespace PioneerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation", indexes={@ORM\Index(name="id_e", columns={"id_e"})})
 * @ORM\Entity(repositoryClass="PioneerBundle\Repository\EvaluationRepository")
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
     * @Assert\NotNull = "Veuillez"
     * @Assert\Range(
     *      min = 0,
     *      max = 20,
     *      minMessage = "Le score doit etre au moins 0 !",
     *      maxMessage = "Le score doit etre au plus 20 !"
     * )
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
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param float $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * @return string
     */
    public function getRemarque()
    {
        return $this->remarque;
    }

    /**
     * @param string $remarque
     */
    public function setRemarque($remarque)
    {
        $this->remarque = $remarque;
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
     * @var \Enfant
     *
     * @ORM\ManyToOne(targetEntity="Enfant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_e", referencedColumnName="id_e")
     * })
     */
    private $idE;


    /**
     * @return \Activite
     */
    public function getIdAc()
    {
        return $this->idAc;
    }

    /**
     * @param \Activite $idAc
     */
    public function setIdAc($idAc)
    {
        $this->idAc = $idAc;
    }

    /**
     * @var \Activite
     *
     * @ORM\ManyToOne(targetEntity="Activite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ac", referencedColumnName="id_ac")
     * })
     */
    private $idAc;
}

