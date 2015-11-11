<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auditoria
 *
 * @ORM\Table(name="auditoria")
 * @ORM\Entity
 */
class Auditoria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idusu", type="integer", nullable=false)
     */
    private $idusu;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=80, nullable=false)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="mac", type="string", length=80, nullable=false)
     */
    private $mac;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahora", type="datetime", nullable=false)
     */
    private $fechahora;

    /**
     * @var string
     *
     * @ORM\Column(name="tabla", type="string", length=60, nullable=false)
     */
    private $tabla;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="accion", type="string", length=3, nullable=false)
     */
    private $accion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

