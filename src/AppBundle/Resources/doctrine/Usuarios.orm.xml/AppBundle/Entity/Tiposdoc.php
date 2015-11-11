<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tiposdoc
 *
 * @ORM\Table(name="tiposdoc")
 * @ORM\Entity
 */
class Tiposdoc
{
    /**
     * @var string
     *
     * @ORM\Column(name="detalle", type="string", length=45, nullable=false)
     */
    private $detalle;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctipo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ctipo;


}

