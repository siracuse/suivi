<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity(repositoryClass="ProjetBundle\Repository\ProjetRepository")
 */
class Projet
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
     * @ORM\Column(name="nom_projet", type="string", length=255)
     */
    private $nomProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date")
     */
    private $dateFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_butoir", type="date")
     */
    private $dateButoir;

    /**
     * @var string
     *
     * @ORM\Column(name="fonctionnalitedev", type="string", length=255)
     */
    private $fonctionnalitedev;

    /**
     * @var string
     *
     * @ORM\Column(name="hebergement", type="string", length=255)
     */
    private $hebergement;

    /**
     * @var string
     *
     * @ORM\Column(name="preprod", type="string", length=255)
     */
    private $preprod;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;


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
     * Set nomProjet
     *
     * @param string $nomProjet
     *
     * @return Projet
     */
    public function setNomProjet($nomProjet)
    {
        $this->nomProjet = $nomProjet;

        return $this;
    }

    /**
     * Get nomProjet
     *
     * @return string
     */
    public function getNomProjet()
    {
        return $this->nomProjet;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Projet
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Projet
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Projet
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set dateButoir
     *
     * @param \DateTime $dateButoir
     *
     * @return Projet
     */
    public function setDateButoir($dateButoir)
    {
        $this->dateButoir = $dateButoir;

        return $this;
    }

    /**
     * Get dateButoir
     *
     * @return \DateTime
     */
    public function getDateButoir()
    {
        return $this->dateButoir;
    }

    /**
     * Set fonctionnalitedev
     *
     * @param string $fonctionnalitedev
     *
     * @return Projet
     */
    public function setFonctionnalitedev($fonctionnalitedev)
    {
        $this->fonctionnalitedev = $fonctionnalitedev;

        return $this;
    }

    /**
     * Get fonctionnalitedev
     *
     * @return string
     */
    public function getFonctionnalitedev()
    {
        return $this->fonctionnalitedev;
    }

    /**
     * Set hebergement
     *
     * @param string $hebergement
     *
     * @return Projet
     */
    public function setHebergement($hebergement)
    {
        $this->hebergement = $hebergement;

        return $this;
    }

    /**
     * Get hebergement
     *
     * @return string
     */
    public function getHebergement()
    {
        return $this->hebergement;
    }

    /**
     * Set preprod
     *
     * @param string $preprod
     *
     * @return Projet
     */
    public function setPreprod($preprod)
    {
        $this->preprod = $preprod;

        return $this;
    }

    /**
     * Get preprod
     *
     * @return string
     */
    public function getPreprod()
    {
        return $this->preprod;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Projet
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
