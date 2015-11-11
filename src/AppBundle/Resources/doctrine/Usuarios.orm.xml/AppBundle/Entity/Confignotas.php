<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Confignotas
 *
 * @ORM\Table(name="confignotas", indexes={@ORM\Index(name="confignotas_config", columns={"itconfig", "grupo"})})
 * @ORM\Entity
 */
class Confignotas
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=40, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="sigla", type="string", length=20, nullable=false)
     */
    private $sigla;

    /**
     * @var string
     *
     * @ORM\Column(name="peso", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $peso;

    /**
     * @var integer
     *
     * @ORM\Column(name="conse", type="integer", nullable=true)
     */
    private $conse;

    /**
     * @var integer
     *
     * @ORM\Column(name="itconfig", type="integer", nullable=true)
     */
    private $itconfig;

    /**
     * @var integer
     *
     * @ORM\Column(name="grupo", type="integer", nullable=true)
     */
    private $grupo;

    /**
     * @var string
     *
     * @ORM\Column(name="general", type="string", nullable=false)
     */
    private $general;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=40, nullable=true)
     */
    private $class;

    /**
     * @var integer
     *
     * @ORM\Column(name="itemconfig", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $itemconfig;

    /**
     * @var integer
     *
     * @ORM\Column(name="item", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $item;


}

