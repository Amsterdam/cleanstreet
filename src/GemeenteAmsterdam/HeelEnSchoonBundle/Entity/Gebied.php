<?php

namespace GemeenteAmsterdam\HeelEnSchoonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table
 */
class Gebied
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $naam;

    /**
     * @var string
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $telefoon;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $geoCenter;
    
    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    private $geoArea;

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
     * Set naam
     *
     * @param string $naam
     *
     * @return Gebied
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;

        return $this;
    }

    /**
     * Get naam
     *
     * @return string
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * Set telefoon
     *
     * @param string $telefoon
     *
     * @return Gebied
     */
    public function setTelefoon($telefoon)
    {
        $this->telefoon = $telefoon;

        return $this;
    }

    /**
     * Get telefoon
     *
     * @return string
     */
    public function getTelefoon()
    {
        return $this->telefoon;
    }

    /**
     * Set geoCenter.
     *
     * @param string|null $geoCenter
     *
     * @return Gebied
     */
    public function setGeoCenter($geoCenter = null)
    {
        $this->geoCenter = $geoCenter;

        return $this;
    }

    /**
     * Get geoCenter.
     *
     * @return string|null
     */
    public function getGeoCenter()
    {
        return $this->geoCenter;
    }

    /**
     * Set geoArea.
     *
     * @param string|null $geoArea
     *
     * @return Gebied
     */
    public function setGeoArea($geoArea = null)
    {
        $this->geoArea = $geoArea;

        return $this;
    }

    /**
     * Get geoArea.
     *
     * @return string|null
     */
    public function getGeoArea()
    {
        return $this->geoArea;
    }
}
