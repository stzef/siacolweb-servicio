<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Docreqalum
 *
 * @ORM\Table(name="docreqalum", indexes={@ORM\Index(name="calum", columns={"calum"}), @ORM\Index(name="codcreq", columns={"codcreq"})})
 * @ORM\Entity
 */
class Docreqalum
{
    /**
     * @var string
     *
     * @ORM\Column(name="calum", type="string", length=4, nullable=false)
     */
    private $calum;

    /**
     * @var string
     *
     * @ORM\Column(name="codcreq", type="string", length=4, nullable=false)
     */
    private $codcreq;

    /**
     * @var string
     *
     * @ORM\Column(name="entregado", type="string", nullable=false)
     */
    private $entregado;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

