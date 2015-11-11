<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movimientos
 *
 * @ORM\Table(name="movimientos")
 * @ORM\Entity
 */
class Movimientos
{
    /**
     * @var string
     *
     * @ORM\Column(name="calum", type="string", length=8, nullable=false)
     */
    private $calum;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=60, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="ctimovi", type="string", length=4, nullable=true)
     */
    private $ctimovi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fmovi", type="date", nullable=true)
     */
    private $fmovi;

    /**
     * @var string
     *
     * @ORM\Column(name="descrimovi", type="text", length=65535, nullable=true)
     */
    private $descrimovi;

    /**
     * @var string
     *
     * @ORM\Column(name="vttotal", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $vttotal;

    /**
     * @var string
     *
     * @ORM\Column(name="activo", type="string", length=1, nullable=true)
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="vefe", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $vefe;

    /**
     * @var string
     *
     * @ORM\Column(name="vtar", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $vtar;

    /**
     * @var string
     *
     * @ORM\Column(name="doctar", type="string", length=10, nullable=true)
     */
    private $doctar;

    /**
     * @var string
     *
     * @ORM\Column(name="bantar", type="string", length=20, nullable=true)
     */
    private $bantar;

    /**
     * @var string
     *
     * @ORM\Column(name="vch", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $vch;

    /**
     * @var string
     *
     * @ORM\Column(name="docch", type="string", length=10, nullable=true)
     */
    private $docch;

    /**
     * @var string
     *
     * @ORM\Column(name="banch", type="string", length=20, nullable=true)
     */
    private $banch;

    /**
     * @var string
     *
     * @ORM\Column(name="ventre", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ventre;

    /**
     * @var string
     *
     * @ORM\Column(name="vcambio", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $vcambio;

    /**
     * @var string
     *
     * @ORM\Column(name="cmovi", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cmovi;


}

