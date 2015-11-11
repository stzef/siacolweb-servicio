<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planestu
 *
 * @ORM\Table(name="planestu", indexes={@ORM\Index(name="planestu_FKIndex1", columns={"cgrupo"}), @ORM\Index(name="planestu_FKIndex2", columns={"cmate"}), @ORM\Index(name="planestu_FKIndex3", columns={"cprofe"})})
 * @ORM\Entity
 */
class Planestu
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="ifperi1", type="boolean", nullable=false)
     */
    private $ifperi1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ifperi2", type="boolean", nullable=false)
     */
    private $ifperi2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ifperi3", type="boolean", nullable=false)
     */
    private $ifperi3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ifperi4", type="boolean", nullable=false)
     */
    private $ifperi4;

    /**
     * @var string
     *
     * @ORM\Column(name="peso", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $peso;

    /**
     * @var integer
     *
     * @ORM\Column(name="ihs", type="integer", nullable=false)
     */
    private $ihs;

    /**
     * @var boolean
     *
     * @ORM\Column(name="calif", type="boolean", nullable=false)
     */
    private $calif = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="cgrupo", type="string", length=8)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cgrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="cprofe", type="string", length=4)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cprofe;

    /**
     * @var string
     *
     * @ORM\Column(name="cmate", type="string", length=6)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cmate;


}

