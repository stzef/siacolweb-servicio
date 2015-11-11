<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horario
 *
 * @ORM\Table(name="horario", indexes={@ORM\Index(name="fk_horario_salones", columns={"csede", "csalon"}), @ORM\Index(name="fk_horario_planestu", columns={"cgrupo", "cprofe", "cmate"}), @ORM\Index(name="fk_horario_horas", columns={"chora"}), @ORM\Index(name="fk_horario_dias", columns={"cdia"})})
 * @ORM\Entity
 */
class Horario
{
    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=2, nullable=false)
     */
    private $csede;

    /**
     * @var string
     *
     * @ORM\Column(name="csalon", type="string", length=10, nullable=false)
     */
    private $csalon;

    /**
     * @var string
     *
     * @ORM\Column(name="cgrupo", type="string", length=8, nullable=false)
     */
    private $cgrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="chora", type="string", length=2, nullable=false)
     */
    private $chora;

    /**
     * @var string
     *
     * @ORM\Column(name="cprofe", type="string", length=4, nullable=false)
     */
    private $cprofe;

    /**
     * @var string
     *
     * @ORM\Column(name="cmate", type="string", length=6, nullable=false)
     */
    private $cmate;

    /**
     * @var string
     *
     * @ORM\Column(name="cdia", type="string", length=1, nullable=false)
     */
    private $cdia;

    /**
     * @var string
     *
     * @ORM\Column(name="ithorario", type="string", length=8)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ithorario;


}

