<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asistenciasdeta
 *
 * @ORM\Table(name="asistenciasdeta", indexes={@ORM\Index(name="casis", columns={"casis"})})
 * @ORM\Entity
 */
class Asistenciasdeta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="dia", type="string", length=2)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dia;

    /**
     * @var integer
     *
     * @ORM\Column(name="casis", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $casis;


}

