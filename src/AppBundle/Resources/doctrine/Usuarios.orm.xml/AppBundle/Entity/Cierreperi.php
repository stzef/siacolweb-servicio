<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cierreperi
 *
 * @ORM\Table(name="cierreperi")
 * @ORM\Entity
 */
class Cierreperi
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fhcienodo0", type="datetime", nullable=false)
     */
    private $fhcienodo0;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fhcienodo1", type="datetime", nullable=false)
     */
    private $fhcienodo1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fhvernoalu0", type="datetime", nullable=false)
     */
    private $fhvernoalu0;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fhvernoalu1", type="datetime", nullable=false)
     */
    private $fhvernoalu1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fhcienoredo0", type="datetime", nullable=false)
     */
    private $fhcienoredo0;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fhcienoredo1", type="datetime", nullable=false)
     */
    private $fhcienoredo1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fhvernorealu0", type="datetime", nullable=false)
     */
    private $fhvernorealu0;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fhvernorealu1", type="datetime", nullable=false)
     */
    private $fhvernorealu1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="cperi", type="string", length=6)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cperi;

    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=2)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $csede;


}

