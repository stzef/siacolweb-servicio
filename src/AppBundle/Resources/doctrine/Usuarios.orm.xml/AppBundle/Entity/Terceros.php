<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Terceros
 *
 * @ORM\Table(name="terceros")
 * @ORM\Entity
 */
class Terceros
{
    /**
     * @var string
     *
     * @ORM\Column(name="idterce", type="string", length=20, nullable=false)
     */
    private $idterce;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctiide", type="integer", nullable=false)
     */
    private $ctiide;

    /**
     * @var string
     *
     * @ORM\Column(name="ape1", type="string", length=20, nullable=true)
     */
    private $ape1;

    /**
     * @var string
     *
     * @ORM\Column(name="ape2", type="string", length=20, nullable=true)
     */
    private $ape2;

    /**
     * @var string
     *
     * @ORM\Column(name="nom1", type="string", length=20, nullable=true)
     */
    private $nom1;

    /**
     * @var string
     *
     * @ORM\Column(name="nom2", type="string", length=20, nullable=true)
     */
    private $nom2;

    /**
     * @var string
     *
     * @ORM\Column(name="dirterce", type="string", length=80, nullable=true)
     */
    private $dirterce;

    /**
     * @var string
     *
     * @ORM\Column(name="telterce", type="string", length=40, nullable=true)
     */
    private $telterce;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=80, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="cciudad", type="string", length=8, nullable=true)
     */
    private $cciudad;

    /**
     * @var integer
     *
     * @ORM\Column(name="citerce", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $citerce;


}

