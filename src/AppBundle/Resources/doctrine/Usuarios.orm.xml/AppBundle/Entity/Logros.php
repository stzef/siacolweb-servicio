<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logros
 *
 * @ORM\Table(name="logros", indexes={@ORM\Index(name="ctilogro", columns={"ctilogro"}), @ORM\Index(name="cgrado", columns={"cgrado"}), @ORM\Index(name="cmate", columns={"cmate"}), @ORM\Index(name="cvalo", columns={"cvalo"})})
 * @ORM\Entity
 */
class Logros
{
    /**
     * @var string
     *
     * @ORM\Column(name="ctilogro", type="string", length=2, nullable=false)
     */
    private $ctilogro;

    /**
     * @var string
     *
     * @ORM\Column(name="cgrado", type="string", length=2, nullable=false)
     */
    private $cgrado;

    /**
     * @var string
     *
     * @ORM\Column(name="cmate", type="string", length=6, nullable=true)
     */
    private $cmate;

    /**
     * @var string
     *
     * @ORM\Column(name="ano", type="string", length=4, nullable=true)
     */
    private $ano;

    /**
     * @var string
     *
     * @ORM\Column(name="peri", type="string", length=2, nullable=true)
     */
    private $peri;

    /**
     * @var string
     *
     * @ORM\Column(name="deta", type="string", length=250, nullable=false)
     */
    private $deta;

    /**
     * @var string
     *
     * @ORM\Column(name="detaalt", type="string", length=300, nullable=true)
     */
    private $detaalt;

    /**
     * @var string
     *
     * @ORM\Column(name="cvalo", type="string", length=1, nullable=true)
     */
    private $cvalo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="general", type="boolean", nullable=true)
     */
    private $general;

    /**
     * @var integer
     *
     * @ORM\Column(name="peso", type="integer", nullable=true)
     */
    private $peso;

    /**
     * @var string
     *
     * @ORM\Column(name="clogro", type="string", length=9)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clogro;


}

