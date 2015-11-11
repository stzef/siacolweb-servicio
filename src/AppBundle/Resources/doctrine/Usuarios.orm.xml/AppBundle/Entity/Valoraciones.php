<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Valoraciones
 *
 * @ORM\Table(name="valoraciones")
 * @ORM\Entity
 */
class Valoraciones
{
    /**
     * @var string
     *
     * @ORM\Column(name="nvalo", type="string", length=40, nullable=true)
     */
    private $nvalo;

    /**
     * @var string
     *
     * @ORM\Column(name="nvaloalt", type="string", length=40, nullable=true)
     */
    private $nvaloalt;

    /**
     * @var string
     *
     * @ORM\Column(name="sigla", type="string", length=15, nullable=false)
     */
    private $sigla;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=true)
     */
    private $orden;

    /**
     * @var string
     *
     * @ORM\Column(name="rini", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $rini;

    /**
     * @var string
     *
     * @ORM\Column(name="rfin", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $rfin;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=12, nullable=false)
     */
    private $color = '255';

    /**
     * @var string
     *
     * @ORM\Column(name="cvalo", type="string", length=1)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cvalo;


}

