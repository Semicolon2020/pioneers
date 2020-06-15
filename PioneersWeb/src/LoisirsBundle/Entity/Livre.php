<?php

namespace LoisirsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\FileType;

/**
 * Livre
 *
 * @ORM\Table(name="livre")
 * @ORM\Entity(repositoryClass="LoisirsBundle\Repository\LivreRepository")
 */
class Livre
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
     * @var string
     *
     * @ORM\Column(name="titrel", type="string", length=255)
     */
    private $titrel;
    /**
     * @ORM\Column( type="string")
     *
     * @Assert\NotBlank(message="Please, upload the product brochure as a PDF file.")
     * @Assert\File(mimeTypes={"application/pdf"})
     * @Assert\File(maxSize="500k")
     */
    private $filel;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $nomImage;

    /**
     * @Assert\File(maxSize="800k")
     */
    public $file;

    /**
     * @var string
     *
     * @ORM\Column(name="audio", type="string", length=255)
     * @Assert\NotBlank(message="Veuillez ajouter votre fichier")
     * @Assert\File(
     *     maxSize = "30M",
     *     mimeTypes = {"audio/mpeg"},
     *     mimeTypesMessage = "Veuillez ajouter un type de fichier valide"
     * )
     */
    private $audio;



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
     * Set titrel
     *
     * @param string $titrel
     *
     * @return Livre
     */
    public function setTitrel($titrel)
    {
        $this->titrel = $titrel;

        return $this;
    }

    /**
     * Get titrel
     *
     * @return string
     */
    public function getTitrel()
    {
        return $this->titrel;
    }

    /**
     * Set filel
     *
     * @param string $filel
     *
     * @return Livre
     */
    public function setFilel($filel)
    {
        $this->filel = $filel;

        return $this;
    }

    /**
     * Get filel
     *
     * @return string
     */
    public function getFilel()
    {
        return $this->filel;
    }



    public function getWebPath(){

        return null===$this->nomImage ? null : $this->getUploadDir.'/'.$this->nomImage;
    }
    protected function getUploadRootDir(){
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir(){
        return 'images';

    }
    public function uploadProfilePicture(){

        $this->file->move($this->getUploadRootDir(),$this->file->getClientOriginalName());
        $this->nomImage=$this->file->getClientOriginalName();
        $this->file=null;
    }

    /**
     * Set nomImage
     *
     * @param string $nomImage
     *
     * @return Categorie
     */
    public function setNomImage($nomImage)
    {
        $this->nomImage=$nomImage;
        return $this;
    }

    /**
     * Get nomImage
     *
     * @return string
     */
    public function getNomImage()
    {
        return $this->nomImage;
    }





    /**
     * Set audio
     *
     * @param string $audio
     *
     * @return Livre
     */
    public function setAudio($audio)
    {
        $this->audio = $audio;

        return $this;
    }

    /**
     * Get audio
     *
     * @return string
     */
    public function getAudio()
    {
        return $this->audio;
    }
}

