<?php

namespace LoisirsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\FileType;

/**
 * Cours
 *
 * @ORM\Table(name="cours")
 * @ORM\Entity(repositoryClass="LoisirsBundle\Repository\CoursRepository")
 */
class Cours
{
    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank(message="remplir Ce champs")
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="tuteur", type="string", length=255)
     */
    private $tuteur;

    /**
     * @ORM\Column( type="string")
     *
     * @Assert\NotBlank(message="Please, upload the product brochure as a PDF file.")
     * @Assert\File(mimeTypes={"application/pdf"})
     * @Assert\File(maxSize="500k")
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     */
    private $file;


    /**
     * @ORM\ManyToOne(targetEntity="Livre")
     * @ORM\JoinColumn(name="livre_id",referencedColumnName="id")
     */
    private $livre;

    /**
     * @return mixed
     */
    public function getLivre()
    {
        return $this->livre;
    }

    /**
     * @param mixed $livre
     */
    public function setLivre($livre)
    {
        $this->livre = $livre;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Cours
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }





    /**
     * Set tuteur
     *
     * @param string $tuteur
     *
     * @return Cours
     */
    public function setTuteur($tuteur)
    {
        $this->tuteur = $tuteur;

        return $this;
    }

    /**
     * Get tuteur
     *
     * @return string
     */
    public function getTuteur()
    {
        return $this->tuteur;
    }

    /**
     * Set file
     *
     * @param string $file
     *
     * @return Cours
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }
}

