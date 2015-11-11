<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asistencias
 *
 * @ORM\Table(name="asistencias")
 * @ORM\Entity
 */
class Asistencias
{
    /**
     * @var string
     *
     * @ORM\Column(name="ano", type="string", length=4, nullable=false)
     */
    private $ano;

    /**
     * @var string
     *
     * @ORM\Column(name="peri", type="string", length=1, nullable=false)
     */
    private $peri;

    /**
     * @var string
     *
     * @ORM\Column(name="mes", type="string", length=2, nullable=false)
     */
    private $mes;

    /**
     * @var string
     *
     * @ORM\Column(name="cmate", type="string", length=6, nullable=false)
     */
    private $cmate;

    /**
     * @var string
     *
     * @ORM\Column(name="calum", type="string", length=8, nullable=false)
     */
    private $calum;

    /**
     * @var integer
     *
     * @ORM\Column(name="fallas", type="integer", nullable=false)
     */
    private $fallas;

    /**
     * @var integer
     *
     * @ORM\Column(name="casis", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $casis;


}

