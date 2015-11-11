<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salones
 *
 * @ORM\Table(name="salones")
 * @ORM\Entity
 */
class Salones
{
    /**
     * @var string
     *
     * @ORM\Column(name="nsalon", type="string", length=80, nullable=false)
     */
    private $nsalon;

    /**
     * @var integer
     *
     * @ORM\Column(name="nestu", type="integer", nullable=false)
     */
    private $nestu;

    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=2)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $csede;

    /**
     * @var string
     *
     * @ORM\Column(name="csalon", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $csalon;


}

