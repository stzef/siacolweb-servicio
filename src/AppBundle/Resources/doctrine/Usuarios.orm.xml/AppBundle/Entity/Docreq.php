<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Docreq
 *
 * @ORM\Table(name="docreq", indexes={@ORM\Index(name="cgrado", columns={"cgrado"})})
 * @ORM\Entity
 */
class Docreq
{
    /**
     * @var string
     *
     * @ORM\Column(name="deta", type="string", length=80, nullable=false)
     */
    private $deta;

    /**
     * @var string
     *
     * @ORM\Column(name="cgrado", type="string", length=2, nullable=false)
     */
    private $cgrado;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="bloquear", type="string", nullable=false)
     */
    private $bloquear;

    /**
     * @var boolean
     *
     * @ORM\Column(name="codreq", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codreq;


}

