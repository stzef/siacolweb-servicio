<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Propu
 *
 * @ORM\Table(name="propu", indexes={@ORM\Index(name="propu_vota_cvota", columns={"cvota"})})
 * @ORM\Entity
 */
class Propu
{
    /**
     * @var string
     *
     * @ORM\Column(name="cvota", type="string", length=4, nullable=false)
     */
    private $cvota;

    /**
     * @var string
     *
     * @ORM\Column(name="npropu", type="string", length=200, nullable=false)
     */
    private $npropu;

    /**
     * @var string
     *
     * @ORM\Column(name="fotopropu", type="text", length=65535, nullable=true)
     */
    private $fotopropu;

    /**
     * @var string
     *
     * @ORM\Column(name="nupropu", type="string", length=2, nullable=true)
     */
    private $nupropu;

    /**
     * @var string
     *
     * @ORM\Column(name="nusufra", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $nusufra;

    /**
     * @var string
     *
     * @ORM\Column(name="nuelimi", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $nuelimi;

    /**
     * @var string
     *
     * @ORM\Column(name="cpropu", type="string", length=4)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cpropu;


}

