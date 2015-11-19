<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alumnosdeta
 *
 * @ORM\Table(name="alumnosdeta")
 * @ORM\Entity
 */
class Alumnosdeta
{
    /**
     * @var string
     *
     * @ORM\Column(name="calum", type="string", length=8, nullable=true)
     */
    private $calum;

    /**
     * @var string
     *
     * @ORM\Column(name="idalum", type="string", length=20, nullable=true)
     */
    private $idalum;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctipo", type="integer", nullable=true)
     */
    private $ctipo;

    /**
     * @var string
     *
     * @ORM\Column(name="cmuniexp", type="string", length=6, nullable=true)
     */
    private $cmuniexp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fregistro", type="date", nullable=true)
     */
    private $fregistro;

    /**
     * @var string
     *
     * @ORM\Column(name="genero", type="string", nullable=true)
     */
    private $genero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fnaci", type="date", nullable=true)
     */
    private $fnaci;

    /**
     * @var string
     *
     * @ORM\Column(name="cmuninaci", type="string", length=6, nullable=true)
     */
    private $cmuninaci;

    /**
     * @var string
     *
     * @ORM\Column(name="ape1alum", type="string", length=25, nullable=true)
     */
    private $ape1alum;

    /**
     * @var string
     *
     * @ORM\Column(name="ape2alum", type="string", length=25, nullable=true)
     */
    private $ape2alum;

    /**
     * @var string
     *
     * @ORM\Column(name="nom1alum", type="string", length=25, nullable=true)
     */
    private $nom1alum;

    /**
     * @var string
     *
     * @ORM\Column(name="nom2alum", type="string", length=25, nullable=true)
     */
    private $nom2alum;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=50, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="barrio", type="string", length=30, nullable=true)
     */
    private $barrio;

    /**
     * @var string
     *
     * @ORM\Column(name="cmunires", type="string", length=6, nullable=true)
     */
    private $cmunires;

    /**
     * @var string
     *
     * @ORM\Column(name="zona", type="string", length=1, nullable=true)
     */
    private $zona;

    /**
     * @var string
     *
     * @ORM\Column(name="comuna", type="string", length=30, nullable=true)
     */
    private $comuna;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=20, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=15, nullable=true)
     */
    private $celular;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=40, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="eps", type="string", length=40, nullable=true)
     */
    private $eps;

    /**
     * @var string
     *
     * @ORM\Column(name="ips", type="string", length=40, nullable=true)
     */
    private $ips;

    /**
     * @var string
     *
     * @ORM\Column(name="ars", type="string", length=40, nullable=true)
     */
    private $ars;

    /**
     * @var string
     *
     * @ORM\Column(name="numsisben", type="string", length=15, nullable=true)
     */
    private $numsisben;

    /**
     * @var string
     *
     * @ORM\Column(name="nivelsisben", type="string", length=1, nullable=true)
     */
    private $nivelsisben;

    /**
     * @var string
     *
     * @ORM\Column(name="estrato", type="string", length=1, nullable=true)
     */
    private $estrato;

    /**
     * @var string
     *
     * @ORM\Column(name="rh", type="string", length=4, nullable=true)
     */
    private $rh;

    /**
     * @var string
     *
     * @ORM\Column(name="pobvictconflic", type="string", length=40, nullable=true)
     */
    private $pobvictconflic;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fexpul", type="date", nullable=true)
     */
    private $fexpul;

    /**
     * @var string
     *
     * @ORM\Column(name="cmuniexpul", type="string", length=6, nullable=true)
     */
    private $cmuniexpul;

    /**
     * @var string
     *
     * @ORM\Column(name="tiposdecapacidades", type="text", length=65535, nullable=true)
     */
    private $tiposdecapacidades;

    /**
     * @var string
     *
     * @ORM\Column(name="tiposdiscapacidades", type="text", length=65535, nullable=true)
     */
    private $tiposdiscapacidades;

    /**
     * @var string
     *
     * @ORM\Column(name="cabezadefamilia", type="string", nullable=true)
     */
    private $cabezadefamilia;

    /**
     * @var string
     *
     * @ORM\Column(name="beneficiariodemadre", type="string", nullable=true)
     */
    private $beneficiariodemadre;

    /**
     * @var string
     *
     * @ORM\Column(name="beneficiariofpublicas", type="string", nullable=true)
     */
    private $beneficiariofpublicas;

    /**
     * @var string
     *
     * @ORM\Column(name="beneficiarioheroen", type="string", nullable=true)
     */
    private $beneficiarioheroen;

    /**
     * @var string
     *
     * @ORM\Column(name="etnia", type="string", length=45, nullable=true)
     */
    private $etnia;

    /**
     * @var string
     *
     * @ORM\Column(name="resguardo", type="string", length=45, nullable=true)
     */
    private $resguardo;

    /**
     * @var string
     *
     * @ORM\Column(name="numregalum", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numregalum;


}

