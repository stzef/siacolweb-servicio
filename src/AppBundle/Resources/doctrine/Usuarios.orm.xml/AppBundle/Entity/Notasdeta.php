<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notasdeta
 *
 * @ORM\Table(name="notasdeta", indexes={@ORM\Index(name="notasdeta_FKIndex1", columns={"cnota"})})
 * @ORM\Entity
 */
class Notasdeta
{
    /**
     * @var string
     *
     * @ORM\Column(name="clogro", type="string", length=9, nullable=true)
     */
    private $clogro;

    /**
     * @var string
     *
     * @ORM\Column(name="notapar", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $notapar;

    /**
     * @var string
     *
     * @ORM\Column(name="cvalopar", type="string", length=1, nullable=true)
     */
    private $cvalopar;

    /**
     * @var string
     *
     * @ORM\Column(name="nota_r1", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $notaR1;

    /**
     * @var string
     *
     * @ORM\Column(name="cvalo_r1", type="string", length=1, nullable=true)
     */
    private $cvaloR1;

    /**
     * @var string
     *
     * @ORM\Column(name="nota_r2", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $notaR2;

    /**
     * @var string
     *
     * @ORM\Column(name="cvalo_r2", type="string", length=1, nullable=true)
     */
    private $cvaloR2;

    /**
     * @var string
     *
     * @ORM\Column(name="nota_defi", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $notaDefi;

    /**
     * @var string
     *
     * @ORM\Column(name="cvalo_defi", type="string", length=1, nullable=true)
     */
    private $cvaloDefi;

    /**
     * @var integer
     *
     * @ORM\Column(name="conse", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $conse;

    /**
     * @var integer
     *
     * @ORM\Column(name="cnota", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cnota;


}

