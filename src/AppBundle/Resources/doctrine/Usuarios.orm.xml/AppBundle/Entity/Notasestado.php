<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notasestado
 *
 * @ORM\Table(name="notasestado")
 * @ORM\Entity
 */
class Notasestado
{
    /**
     * @var string
     *
     * @ORM\Column(name="cesta", type="string", length=2, nullable=false)
     */
    private $cesta;

    /**
     * @var integer
     *
     * @ORM\Column(name="ano", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="peri", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $peri;

    /**
     * @var string
     *
     * @ORM\Column(name="codalum", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codalum;

    /**
     * @var string
     *
     * @ORM\Column(name="grado", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $grado;


}

