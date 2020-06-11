<?php

namespace rappelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * rap
 *
 * @ORM\Table(name="rap")
 * @ORM\Entity(repositoryClass="rappelBundle\Repository\rappelRepository")
 */
class rappel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;



    /**
     * @var DateTime
     *
     * @ORM\Column(name="date", type="date",
     *     nullable=false)
     */
    private $date;

    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="Objet", type="string", length=255)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=255)
     */
    private $text;
    /**
     * @var string
     *
     * @ORM\Column(name="enfant", type="string", length=255)
     */
    private $enfant;

    /**
     * @return string
     */
    public function getEnfant()
    {
        return $this->enfant;
    }

    /**
     * @param string $enfant
     */
    public function setEnfant($enfant)
    {
        $this->enfant = $enfant;
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }




    /**
     * Set objet
     *
     * @param string $objet
     *
     * @return rappel
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;
    
        return $this;
    }

    /**
     * Get objet
     *
     * @return string
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return rappel
     */
    public function setText($text)
    {
        $this->text = $text;
    
        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}

