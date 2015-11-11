<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movimientosdeta
 *
 * @ORM\Table(name="movimientosdeta", indexes={@ORM\Index(name="movimientosdeta_ibfk_1", columns={"cmovi"})})
 * @ORM\Entity
 */
class Movimientosdeta
{
    /**
     * @var string
     *
     * @ORM\Column(name="docuref", type="string", length=10, nullable=true)
     */
    private $docuref;

    /**
     * @var string
     *
     * @ORM\Column(name="cconcep", type="string", length=6, nullable=true)
     */
    private $cconcep;

    /**
     * @var string
     *
     * @ORM\Column(name="nconcep", type="string", length=60, nullable=true)
     */
    private $nconcep;

    /**
     * @var integer
     *
     * @ORM\Column(name="canti", type="integer", nullable=true)
     */
    private $canti;

    /**
     * @var string
     *
     * @ORM\Column(name="vunita", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $vunita;

    /**
     * @var string
     *
     * @ORM\Column(name="vtotal", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $vtotal;

    /**
     * @var string
     *
     * @ORM\Column(name="itmovi", type="string", length=4)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $itmovi;

    /**
     * @var string
     *
     * @ORM\Column(name="cmovi", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cmovi;


}

