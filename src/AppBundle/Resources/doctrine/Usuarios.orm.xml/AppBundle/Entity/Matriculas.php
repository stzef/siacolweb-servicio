<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matriculas
 *
 * @ORM\Table(name="matriculas", uniqueConstraints={@ORM\UniqueConstraint(name="cmatricula", columns={"cmatricula"})})
 * @ORM\Entity
 */
class Matriculas
{
    /**
     * @var string
     *
     * @ORM\Column(name="nuevo", type="string", nullable=true)
     */
    private $nuevo = 'T';

    /**
     * @var integer
     *
     * @ORM\Column(name="cestamatricula", type="integer", nullable=true)
     */
    private $cestamatricula;

    /**
     * @var string
     *
     * @ORM\Column(name="numregalum", type="string", length=15, nullable=true)
     */
    private $numregalum;

    /**
     * @var string
     *
     * @ORM\Column(name="calum", type="string", length=8, nullable=true)
     */
    private $calum;

    /**
     * @var string
     *
     * @ORM\Column(name="cjorna", type="string", length=2, nullable=true)
     */
    private $cjorna;

    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=2, nullable=true)
     */
    private $csede;

    /**
     * @var string
     *
     * @ORM\Column(name="cgrado", type="string", length=2, nullable=true)
     */
    private $cgrado;

    /**
     * @var string
     *
     * @ORM\Column(name="cgrupo", type="string", length=8, nullable=true)
     */
    private $cgrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="ano", type="string", length=4, nullable=true)
     */
    private $ano;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fregistro", type="date", nullable=true)
     */
    private $fregistro;

    /**
     * @var string
     *
     * @ORM\Column(name="instprocedencia", type="string", length=100, nullable=true)
     */
    private $instprocedencia;

    /**
     * @var string
     *
     * @ORM\Column(name="estacademico", type="string", length=30, nullable=true)
     */
    private $estacademico;

    /**
     * @var string
     *
     * @ORM\Column(name="motivotraslado", type="text", length=65535, nullable=true)
     */
    private $motivotraslado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fretiro", type="date", nullable=true)
     */
    private $fretiro;

    /**
     * @var integer
     *
     * @ORM\Column(name="cretiro", type="integer", nullable=true)
     */
    private $cretiro;

    /**
     * @var string
     *
     * @ORM\Column(name="observretiro", type="text", length=65535, nullable=true)
     */
    private $observretiro;

    /**
     * @var string
     *
     * @ORM\Column(name="cmatricula", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cmatricula;


}

