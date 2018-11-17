<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voitures
 *
 * @ORM\Table(name="voitures")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VoituresRepository")
 */
class Voitures
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
     * @ORM\Column(name="Plaque", type="string", length=12)
     */
    private $plaque;

    /**
     * @var string
     *
     * @ORM\Column(name="Marque", type="string", length=20)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="Modele", type="string", length=20)
     */
    private $modele;

    /**
     * @var int
     *
     * @ORM\Column(name="Cylindree", type="integer")
     */
    private $cylindree;

    /**
     * @var string
     *
     * @ORM\Column(name="Transmission", type="string", length=1)
     */
    private $transmission;

    /**
     * @var float
     *
     * @ORM\Column(name="Prix", type="float")
     */
    private $prix;


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
     * Set plaque
     *
     * @param string $plaque
     *
     * @return Voitures
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
     * Set marque
     *
     * @param string $marque
     *
     * @return Voitures
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set modele
     *
     * @param string $modele
     *
     * @return Voitures
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set cylindree
     *
     * @param integer $cylindree
     *
     * @return Voitures
     */
    public function setCylindree($cylindree)
    {
        $this->cylindree = $cylindree;

        return $this;
    }

    /**
     * Get cylindree
     *
     * @return int
     */
    public function getCylindree()
    {
        return $this->cylindree;
    }

    /**
     * Set transmission
     *
     * @param string $transmission
     *
     * @return Voitures
     */
    public function setTransmission($transmission)
    {
        $this->transmission = $transmission;

        return $this;
    }

    /**
     * Get transmission
     *
     * @return string
     */
    public function getTransmission()
    {
        return $this->transmission;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Voitures
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }
}

