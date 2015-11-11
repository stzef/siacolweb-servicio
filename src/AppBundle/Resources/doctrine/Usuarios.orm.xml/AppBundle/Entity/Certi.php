<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certi
 *
 * @ORM\Table(name="certi", indexes={@ORM\Index(name="cticerti", columns={"cticerti"})})
 * @ORM\Entity
 */
class Certi
{
    /**
     * @var string
     *
     * @ORM\Column(name="calum", type="string", length=10, nullable=false)
     */
    private $calum;

    /**
     * @var string
     *
     * @ORM\Column(name="nalum", type="string", length=100, nullable=false)
     */
    private $nalum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fcerti", type="date", nullable=false)
     */
    private $fcerti;

    /**
     * @var string
     *
     * @ORM\Column(name="anocerti", type="string", length=4, nullable=false)
     */
    private $anocerti;

    /**
     * @var integer
     *
     * @ORM\Column(name="pericerti", type="integer", nullable=false)
     */
    private $pericerti;

    /**
     * @var integer
     *
     * @ORM\Column(name="cticerti", type="integer", nullable=false)
     */
    private $cticerti;

    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="text", length=65535, nullable=false)
     */
    private $texto;

    /**
     * @var string
     *
     * @ORM\Column(name="nfirma1", type="string", length=40, nullable=true)
     */
    private $nfirma1;

    /**
     * @var string
     *
     * @ORM\Column(name="nfirma2", type="string", length=40, nullable=true)
     */
    private $nfirma2;

    /**
     * @var string
     *
     * @ORM\Column(name="nelabora", type="string", length=40, nullable=true)
     */
    private $nelabora;

    /**
     * @var string
     *
     * @ORM\Column(name="observa", type="text", length=65535, nullable=true)
     */
    private $observa;

    /**
     * @var string
     *
     * @ORM\Column(name="fondoimg", type="string", length=70, nullable=true)
     */
    private $fondoimg;

    /**
     * @var string
     *
     * @ORM\Column(name="nesta", type="string", length=60, nullable=true)
     */
    private $nesta;

    /**
     * @var string
     *
     * @ORM\Column(name="ccerti", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ccerti;


}

