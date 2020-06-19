<?php

namespace CollaborateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Collab
 *
 * @ORM\Table(name="collab")
 * @ORM\Entity(repositoryClass="CollaborateurBundle\Repository\CollabRepository")
 */
class Collab
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
     * @ORM\Column(name="password_collab", type="string", length=255)
     */
    private $passwordCollab;

    /**
     * @var string
     *
     * @ORM\Column(name="email_collab", type="string", length=255)
     */
    private $emailCollab;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_collab", type="string", length=255)
     */
    private $nomCollab;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_collab", type="string", length=255)
     */
    private $prenomCollab;


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
     * Set passwordCollab
     *
     * @param string $passwordCollab
     *
     * @return Collab
     */
    public function setPasswordCollab($passwordCollab)
    {
        $this->passwordCollab = $passwordCollab;

        return $this;
    }

    /**
     * Get passwordCollab
     *
     * @return string
     */
    public function getPasswordCollab()
    {
        return $this->passwordCollab;
    }

    /**
     * Set emailCollab
     *
     * @param string $emailCollab
     *
     * @return Collab
     */
    public function setEmailCollab($emailCollab)
    {
        $this->emailCollab = $emailCollab;

        return $this;
    }

    /**
     * Get emailCollab
     *
     * @return string
     */
    public function getEmailCollab()
    {
        return $this->emailCollab;
    }

    /**
     * Set nomCollab
     *
     * @param string $nomCollab
     *
     * @return Collab
     */
    public function setNomCollab($nomCollab)
    {
        $this->nomCollab = $nomCollab;

        return $this;
    }

    /**
     * Get nomCollab
     *
     * @return string
     */
    public function getNomCollab()
    {
        return $this->nomCollab;
    }

    /**
     * Set prenomCollab
     *
     * @param string $prenomCollab
     *
     * @return Collab
     */
    public function setPrenomCollab($prenomCollab)
    {
        $this->prenomCollab = $prenomCollab;

        return $this;
    }

    /**
     * Get prenomCollab
     *
     * @return string
     */
    public function getPrenomCollab()
    {
        return $this->prenomCollab;
    }
}
