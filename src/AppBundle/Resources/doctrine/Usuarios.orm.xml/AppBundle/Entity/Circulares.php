<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Circulares
 *
 * @ORM\Table(name="circulares")
 * @ORM\Entity
 */
class Circulares
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fcircu", type="date", nullable=false)
     */
    private $fcircu;

    /**
     * @var string
     *
     * @ORM\Column(name="de", type="string", length=60, nullable=true)
     */
    private $de;

    /**
     * @var string
     *
     * @ORM\Column(name="para", type="string", length=100, nullable=true)
     */
    private $para;

    /**
     * @var string
     *
     * @ORM\Column(name="asunto", type="string", length=40, nullable=true)
     */
    private $asunto;

    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="text", length=65535, nullable=true)
     */
    private $texto;

    /**
     * @var string
     *
     * @ORM\Column(name="ccircu", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ccircu;


}

