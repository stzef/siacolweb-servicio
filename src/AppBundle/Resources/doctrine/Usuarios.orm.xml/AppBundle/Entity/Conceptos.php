<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conceptos
 *
 * @ORM\Table(name="conceptos")
 * @ORM\Entity
 */
class Conceptos
{
    /**
     * @var string
     *
     * @ORM\Column(name="nconcep", type="string", length=60, nullable=true)
     */
    private $nconcep;

    /**
     * @var string
     *
     * @ORM\Column(name="vconsta", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $vconsta;

    /**
     * @var string
     *
     * @ORM\Column(name="activo", type="string", length=1, nullable=true)
     */
    private $activo;

    /**
     * @var integer
     *
     * @ORM\Column(name="repeti", type="integer", nullable=true)
     */
    private $repeti;

    /**
     * @var string
     *
     * @ORM\Column(name="mesinit", type="string", length=2, nullable=true)
     */
    private $mesinit;

    /**
     * @var string
     *
     * @ORM\Column(name="cconcep", type="string", length=6)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cconcep;


}

