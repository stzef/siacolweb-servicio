<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tilogros
 *
 * @ORM\Table(name="tilogros")
 * @ORM\Entity
 */
class Tilogros
{
    /**
     * @var string
     *
     * @ORM\Column(name="ntilogro", type="string", length=40, nullable=true)
     */
    private $ntilogro;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=true)
     */
    private $orden;

    /**
     * @var string
     *
     * @ORM\Column(name="valorable", type="string", nullable=true)
     */
    private $valorable;

    /**
     * @var string
     *
     * @ORM\Column(name="ctilogro", type="string", length=2)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ctilogro;


}

