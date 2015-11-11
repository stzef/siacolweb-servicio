<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sedes
 *
 * @ORM\Table(name="sedes")
 * @ORM\Entity
 */
class Sedes
{
    /**
     * @var string
     *
     * @ORM\Column(name="nsede", type="string", length=60, nullable=true)
     */
    private $nsede;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="coddane", type="string", length=15, nullable=true)
     */
    private $coddane;

    /**
     * @var string
     *
     * @ORM\Column(name="coddaneold", type="string", length=15, nullable=true)
     */
    private $coddaneold;

    /**
     * @var string
     *
     * @ORM\Column(name="consesede", type="string", length=15, nullable=true)
     */
    private $consesede;

    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=2)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $csede;


}

