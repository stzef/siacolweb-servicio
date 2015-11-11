<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fcarnet
 *
 * @ORM\Table(name="fcarnet")
 * @ORM\Entity
 */
class Fcarnet
{
    /**
     * @var string
     *
     * @ORM\Column(name="ncampo", type="text", length=65535, nullable=false)
     */
    private $ncampo;

    /**
     * @var string
     *
     * @ORM\Column(name="consult", type="string", nullable=false)
     */
    private $consult;

    /**
     * @var string
     *
     * @ORM\Column(name="controlador", type="text", length=65535, nullable=true)
     */
    private $controlador;

    /**
     * @var string
     *
     * @ORM\Column(name="posx", type="string", length=20, nullable=true)
     */
    private $posx;

    /**
     * @var string
     *
     * @ORM\Column(name="posy", type="string", length=20, nullable=true)
     */
    private $posy;

    /**
     * @var string
     *
     * @ORM\Column(name="fondo", type="string", length=50, nullable=true)
     */
    private $fondo;

    /**
     * @var integer
     *
     * @ORM\Column(name="tfont", type="integer", nullable=true)
     */
    private $tfont;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=8, nullable=true)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="negrita", type="string", length=1, nullable=true)
     */
    private $negrita;

    /**
     * @var string
     *
     * @ORM\Column(name="tamw", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $tamw;

    /**
     * @var string
     *
     * @ORM\Column(name="tamh", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $tamh;

    /**
     * @var integer
     *
     * @ORM\Column(name="ccarnet", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ccarnet;

    /**
     * @var integer
     *
     * @ORM\Column(name="item", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $item;


}

