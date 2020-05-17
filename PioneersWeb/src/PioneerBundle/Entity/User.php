<?php

namespace PioneerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;
use Mgilet\NotificationBundle\Annotation\Notifiable;
use Mgilet\NotificationBundle\NotifiableInterface;
/**
 * User
 *
 * @ORM\Table(name="`user`", uniqueConstraints={@ORM\UniqueConstraint(name="cin", columns={"cin"}), @ORM\UniqueConstraint(name="email", columns={"email", "num_tel"})})
 * @ORM\Entity(repositoryClass="PioneerBundle\Repository\UserRepository")
 * @Notifiable(name="User")
 */
class User extends BaseUser  implements NotifiableInterface
{
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }


    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=8, nullable=true)
     * @Assert\Length(min=8,max=8,maxMessage="8 characters",maxMessage="8 characters")
     */
    protected $cin;



    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=1, nullable=true)
     */
    protected $role;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     * @Assert\Type("string")
     */
    protected $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    protected $prenom;



    /**
     * @var string
     *
     * @ORM\Column(name="num_tel", type="string", length=8, nullable=true)
     * @Assert\Length(min=8,max=8,maxMessage="8 characters",minMessage="8 characters")
     */
    protected $numTel;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_compte", type="string", length=1, nullable=true)
     */
    protected $etatCompte;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_civil", type="string", length=10, nullable=true)
     */
    protected $etatCivil;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    protected $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=10, nullable=true)
     */
    protected $sexe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_embauche", type="datetime", nullable=true)
     */
    protected $dateEmbauche;

    /**
     * @return string
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param string $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }



    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }


    /**
     * @return string
     */
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * @param string $numTel
     */
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;
    }

    /**
     * @return string
     */
    public function getEtatCompte()
    {
        return $this->etatCompte;
    }

    /**
     * @param string $etatCompte
     */
    public function setEtatCompte($etatCompte)
    {
        $this->etatCompte = $etatCompte;
    }

    /**
     * @return string
     */
    public function getEtatCivil()
    {
        return $this->etatCivil;
    }

    /**
     * @param string $etatCivil
     */
    public function setEtatCivil($etatCivil)
    {
        $this->etatCivil = $etatCivil;
    }

    /**
     * @return \DateTime
     */
    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    /**
     * @param \DateTime $dateEmbauche
     */
    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;
    }

    /**
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param string $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }






}

