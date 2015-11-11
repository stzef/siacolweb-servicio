<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certideta
 *
 * @ORM\Table(name="certideta")
 * @ORM\Entity
 */
class Certideta
{
    /**
     * @var string
     *
     * @ORM\Column(name="cmate", type="string", length=6, nullable=true)
     */
    private $cmate;

    /**
     * @var string
     *
     * @ORM\Column(name="nmate", type="string", length=80, nullable=false)
     */
    private $nmate;

    /**
     * @var integer
     *
     * @ORM\Column(name="ihs", type="integer", nullable=true)
     */
    private $ihs;

    /**
     * @var string
     *
     * @ORM\Column(name="valnum", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $valnum;

    /**
     * @var string
     *
     * @ORM\Column(name="valcon", type="string", length=80, nullable=true)
     */
    private $valcon;

    /**
     * @var string
     *
     * @ORM\Column(name="itcerti", type="string", length=4)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $itcerti;

    /**
     * @var string
     *
     * @ORM\Column(name="ccerti", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ccerti;


}

