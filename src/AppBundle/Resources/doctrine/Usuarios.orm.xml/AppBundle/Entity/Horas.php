<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horas
 *
 * @ORM\Table(name="horas")
 * @ORM\Entity
 */
class Horas
{
    /**
     * @var string
     *
     * @ORM\Column(name="nhora", type="string", length=40, nullable=false)
     */
    private $nhora;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hini", type="time", nullable=false)
     */
    private $hini;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hfin", type="time", nullable=false)
     */
    private $hfin;

    /**
     * @var string
     *
     * @ORM\Column(name="chora", type="string", length=2)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $chora;


}

