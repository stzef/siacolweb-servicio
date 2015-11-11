<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anecdotario
 *
 * @ORM\Table(name="anecdotario", indexes={@ORM\Index(name="fk_anecdotario_alumnos", columns={"calum"}), @ORM\Index(name="fk_anecdotario_profes", columns={"cprofe"})})
 * @ORM\Entity
 */
class Anecdotario
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
     * @ORM\Column(name="cprofe", type="string", length=10, nullable=false)
     */
    private $cprofe;

    /**
     * @var string
     *
     * @ORM\Column(name="peri", type="string", length=1, nullable=false)
     */
    private $peri;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fcaso", type="date", nullable=false)
     */
    private $fcaso;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo", type="text", length=65535, nullable=false)
     */
    private $cargo;

    /**
     * @var string
     *
     * @ORM\Column(name="descargo", type="text", length=65535, nullable=false)
     */
    private $descargo;

    /**
     * @var string
     *
     * @ORM\Column(name="final", type="text", length=65535, nullable=false)
     */
    private $final;

    /**
     * @var string
     *
     * @ORM\Column(name="gravedad", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $gravedad;

    /**
     * @var integer
     *
     * @ORM\Column(name="ccaso", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ccaso;


}

