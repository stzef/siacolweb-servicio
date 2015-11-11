<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grados
 *
 * @ORM\Table(name="grados", indexes={@ORM\Index(name="grados_ctipedufk_1", columns={"ctipedu"})})
 * @ORM\Entity
 */
class Grados
{
    /**
     * @var string
     *
     * @ORM\Column(name="ngrado", type="string", length=40, nullable=true)
     */
    private $ngrado;

    /**
     * @var string
     *
     * @ORM\Column(name="ctipedu", type="string", length=1, nullable=false)
     */
    private $ctipedu;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=1, nullable=false)
     */
    private $tipo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="cgrado", type="string", length=2)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cgrado;


}

