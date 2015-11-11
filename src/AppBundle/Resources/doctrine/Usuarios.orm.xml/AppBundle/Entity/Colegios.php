<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Colegios
 *
 * @ORM\Table(name="colegios")
 * @ORM\Entity
 */
class Colegios
{
    /**
     * @var string
     *
     * @ORM\Column(name="ccole", type="string", length=9, nullable=false)
     */
    private $ccole;

    /**
     * @var string
     *
     * @ORM\Column(name="ncole", type="string", length=80, nullable=true)
     */
    private $ncole;

    /**
     * @var string
     *
     * @ORM\Column(name="nit", type="string", length=9, nullable=true)
     */
    private $nit;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=15, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=60, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="dv", type="string", length=1, nullable=true)
     */
    private $dv;

    /**
     * @var string
     *
     * @ORM\Column(name="cdepto", type="string", length=4, nullable=false)
     */
    private $cdepto;

    /**
     * @var string
     *
     * @ORM\Column(name="cmuni", type="string", length=6, nullable=false)
     */
    private $cmuni;

    /**
     * @var string
     *
     * @ORM\Column(name="anoelect", type="string", length=5, nullable=false)
     */
    private $anoelect;

    /**
     * @var string
     *
     * @ORM\Column(name="cdanenuevo", type="string", length=20, nullable=false)
     */
    private $cdanenuevo;

    /**
     * @var string
     *
     * @ORM\Column(name="cdaneantiguo", type="string", length=20, nullable=false)
     */
    private $cdaneantiguo;

    /**
     * @var string
     *
     * @ORM\Column(name="consecutivo", type="string", length=20, nullable=false)
     */
    private $consecutivo;

    /**
     * @var string
     *
     * @ORM\Column(name="rector", type="string", length=80, nullable=true)
     */
    private $rector;

    /**
     * @var string
     *
     * @ORM\Column(name="idrector", type="string", length=12, nullable=true)
     */
    private $idrector;

    /**
     * @var string
     *
     * @ORM\Column(name="secretario", type="string", length=80, nullable=true)
     */
    private $secretario;

    /**
     * @var string
     *
     * @ORM\Column(name="idsecretario", type="string", length=12, nullable=false)
     */
    private $idsecretario;

    /**
     * @var string
     *
     * @ORM\Column(name="nrapido", type="string", length=20, nullable=true)
     */
    private $nrapido;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cerrado", type="boolean", nullable=true)
     */
    private $cerrado;

    /**
     * @var string
     *
     * @ORM\Column(name="logo1", type="string", length=60, nullable=true)
     */
    private $logo1;

    /**
     * @var string
     *
     * @ORM\Column(name="logo2", type="string", length=60, nullable=true)
     */
    private $logo2;

    /**
     * @var string
     *
     * @ORM\Column(name="logo3", type="string", length=100, nullable=true)
     */
    private $logo3;

    /**
     * @var string
     *
     * @ORM\Column(name="logo4", type="string", length=60, nullable=true)
     */
    private $logo4;

    /**
     * @var string
     *
     * @ORM\Column(name="logo5", type="string", length=60, nullable=true)
     */
    private $logo5;

    /**
     * @var string
     *
     * @ORM\Column(name="banner1", type="string", length=100, nullable=true)
     */
    private $banner1;

    /**
     * @var string
     *
     * @ORM\Column(name="banner2", type="string", length=100, nullable=true)
     */
    private $banner2;

    /**
     * @var string
     *
     * @ORM\Column(name="banner3", type="string", length=100, nullable=true)
     */
    private $banner3;

    /**
     * @var string
     *
     * @ORM\Column(name="banner4", type="string", length=100, nullable=true)
     */
    private $banner4;

    /**
     * @var string
     *
     * @ORM\Column(name="banner5", type="string", length=100, nullable=true)
     */
    private $banner5;

    /**
     * @var string
     *
     * @ORM\Column(name="emailpnotas", type="string", length=80, nullable=false)
     */
    private $emailpnotas;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

