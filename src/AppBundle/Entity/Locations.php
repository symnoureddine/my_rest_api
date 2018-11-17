<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locations
 *
 * @ORM\Table(name="locations")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LocationsRepository")
 */
class Locations
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
     * @var int
     *
     * @ORM\Column(name="IdClient", type="integer")
     */
    private $idClient;

    /**
     * @var string
     *
     * @ORM\Column(name="Plaque", type="string", length=12)
     */
    private $plaque;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDebut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFin", type="datetime")
     */
    private $dateFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateRentree", type="datetime")
     */
    private $dateRentree;

    /**
     * @var bool
     *
     * @ORM\Column(name="Assurance", type="boolean")
     */
    private $assurance;


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
     * Set idClient
     *
     * @param integer $idClient
     *
     * @return Locations
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return int
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set plaque
     *
     * @param string $plaque
     *
     * @return Locations
     */
    public function setPlaque($plaque)
    {
        $this->plaque = $plaque;

        return $this;
    }

    /**
     * Get plaque
     *
     * @return string
     */
    public function getPlaque()
    {
        return $this->plaque;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Locations
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
     * @return Locations
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
     * Set dateRentree
     *
     * @param \DateTime $dateRentree
     *
     * @return Locations
     */
    public function setDateRentree($dateRentree)
    {
        $this->dateRentree = $dateRentree;

        return $this;
    }

    /**
     * Get dateRentree
     *
     * @return \DateTime
     */
    public function getDateRentree()
    {
        return $this->dateRentree;
    }

    /**
     * Set assurance
     *
     * @param boolean $assurance
     *
     * @return Locations
     */
    public function setAssurance($assurance)
    {
        $this->assurance = $assurance;

        return $this;
    }

    /**
     * Get assurance
     *
     * @return bool
     */
    public function getAssurance()
    {
        return $this->assurance;
    }
}

