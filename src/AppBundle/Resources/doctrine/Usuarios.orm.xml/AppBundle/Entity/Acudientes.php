<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acudientes
 *
 * @ORM\Table(name="acudientes")
 * @ORM\Entity
 */
class Acudientes
{
    /**
     * @var string
     *
     * @ORM\Column(name="numregalum", type="string", length=15, nullable=true)
     */
    private $numregalum;

    /**
     * @var integer
     *
     * @ORM\Column(name="idfamiliar", type="integer", nullable=true)
     */
    private $idfamiliar;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctipo", type="integer", nullable=true)
     */
    private $ctipo;

    /**
     * @var string
     *
     * @ORM\Column(name="ape1familiar", type="string", length=25, nullable=true)
     */
    private $ape1familiar;

    /**
     * @var string
     *
     * @ORM\Column(name="ape2familiar", type="string", length=25, nullable=true)
     */
    private $ape2familiar;

    /**
     * @var string
     *
     * @ORM\Column(name="nom1familiar", type="string", length=25, nullable=true)
     */
    private $nom1familiar;

    /**
     * @var string
     *
     * @ORM\Column(name="nom2familiar", type="string", length=25, nullable=true)
     */
    private $nom2familiar;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=15, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=30, nullable=true)
     */
    private $celular;

    /**
     * @var string
     *
     * @ORM\Column(name="cdeptoexpe", type="string", length=4, nullable=true)
     */
    private $cdeptoexpe;

    /**
     * @var string
     *
     * @ORM\Column(name="cmuniexp", type="string", length=6, nullable=true)
     */
    private $cmuniexp;

    /**
     * @var integer
     *
     * @ORM\Column(name="parentesco", type="integer", nullable=true)
     */
    private $parentesco;

    /**
     * @var string
     *
     * @ORM\Column(name="acudiente", type="string", nullable=true)
     */
    private $acudiente;

    /**
     * @var string
     *
     * @ORM\Column(name="profesion", type="string", length=50, nullable=true)
     */
    private $profesion;

    /**
     * @var string
     *
     * @ORM\Column(name="ocupacion", type="string", length=50, nullable=true)
     */
    private $ocupacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="cfamiliar", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cfamiliar;


}

