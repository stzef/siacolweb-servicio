<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notasfinal
 *
 * @ORM\Table(name="notasfinal", indexes={@ORM\Index(name="notasfinal_FKIndex1", columns={"cestafin"})})
 * @ORM\Entity
 */
class Notasfinal
{
    /**
     * @var string
     *
     * @ORM\Column(name="cestafin", type="string", length=2, nullable=false)
     */
    private $cestafin;

    /**
     * @var string
     *
     * @ORM\Column(name="ano", type="string", length=4)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ano;

    /**
     * @var string
     *
     * @ORM\Column(name="peri", type="string", length=3)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $peri;

    /**
     * @var string
     *
     * @ORM\Column(name="calum", type="string", length=8)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $calum;


}

