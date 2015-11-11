<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vota
 *
 * @ORM\Table(name="vota")
 * @ORM\Entity
 */
class Vota
{
    /**
     * @var string
     *
     * @ORM\Column(name="nvota", type="string", length=200, nullable=true)
     */
    private $nvota;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ifacti", type="boolean", nullable=true)
     */
    private $ifacti;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fini", type="date", nullable=true)
     */
    private $fini;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ffin", type="date", nullable=true)
     */
    private $ffin;

    /**
     * @var string
     *
     * @ORM\Column(name="tiprosu", type="decimal", precision=2, scale=0, nullable=true)
     */
    private $tiprosu;

    /**
     * @var integer
     *
     * @ORM\Column(name="cvota", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cvota;


}

