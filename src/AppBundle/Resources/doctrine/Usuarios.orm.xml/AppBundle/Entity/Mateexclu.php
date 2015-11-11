<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mateexclu
 *
 * @ORM\Table(name="mateexclu", indexes={@ORM\Index(name="fk_mateexclu_materias", columns={"cmate"}), @ORM\Index(name="fk_mateexclu_periodos", columns={"cperi"})})
 * @ORM\Entity
 */
class Mateexclu
{
    /**
     * @var string
     *
     * @ORM\Column(name="ano", type="string", length=4, nullable=false)
     */
    private $ano;

    /**
     * @var string
     *
     * @ORM\Column(name="calum", type="string", length=8)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $calum;

    /**
     * @var string
     *
     * @ORM\Column(name="cmate", type="string", length=6)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cmate;

    /**
     * @var string
     *
     * @ORM\Column(name="cperi", type="string", length=3)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cperi;


}

