<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jornadas
 *
 * @ORM\Table(name="jornadas")
 * @ORM\Entity
 */
class Jornadas
{
    /**
     * @var string
     *
     * @ORM\Column(name="njorna", type="string", length=40, nullable=true)
     */
    private $njorna;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="cjorna", type="string", length=2)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cjorna;


}

