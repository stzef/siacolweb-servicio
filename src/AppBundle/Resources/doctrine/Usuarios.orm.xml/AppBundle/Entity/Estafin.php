<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estafin
 *
 * @ORM\Table(name="estafin")
 * @ORM\Entity
 */
class Estafin
{
    /**
     * @var string
     *
     * @ORM\Column(name="nestafin", type="string", length=40, nullable=true)
     */
    private $nestafin;

    /**
     * @var string
     *
     * @ORM\Column(name="riniap", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $riniap;

    /**
     * @var string
     *
     * @ORM\Column(name="rfniap", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $rfniap;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", nullable=false)
     */
    private $estado = 'R';

    /**
     * @var string
     *
     * @ORM\Column(name="cestafin", type="string", length=2)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cestafin;


}

