<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materias
 *
 * @ORM\Table(name="materias")
 * @ORM\Entity
 */
class Materias
{
    /**
     * @var string
     *
     * @ORM\Column(name="nmate", type="string", length=80, nullable=true)
     */
    private $nmate;

    /**
     * @var string
     *
     * @ORM\Column(name="nmatealt", type="string", length=80, nullable=true)
     */
    private $nmatealt;

    /**
     * @var string
     *
     * @ORM\Column(name="sigla", type="string", length=10, nullable=true)
     */
    private $sigla;

    /**
     * @var string
     *
     * @ORM\Column(name="timate", type="string", length=1, nullable=true)
     */
    private $timate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="promefin", type="boolean", nullable=true)
     */
    private $promefin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ifmateexclu", type="boolean", nullable=false)
     */
    private $ifmateexclu = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ihs", type="integer", nullable=true)
     */
    private $ihs;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=true)
     */
    private $orden;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="cmate", type="string", length=6)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cmate;


}

