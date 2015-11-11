<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profes
 *
 * @ORM\Table(name="profes", indexes={@ORM\Index(name="fk_profes_tiposdoc", columns={"ctipo"})})
 * @ORM\Entity
 */
class Profes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ctipo", type="integer", nullable=true)
     */
    private $ctipo;

    /**
     * @var string
     *
     * @ORM\Column(name="idprofe", type="string", length=12, nullable=true)
     */
    private $idprofe;

    /**
     * @var string
     *
     * @ORM\Column(name="ape1profe", type="string", length=20, nullable=true)
     */
    private $ape1profe;

    /**
     * @var string
     *
     * @ORM\Column(name="ape2profe", type="string", length=20, nullable=true)
     */
    private $ape2profe;

    /**
     * @var string
     *
     * @ORM\Column(name="nom1profe", type="string", length=20, nullable=true)
     */
    private $nom1profe;

    /**
     * @var string
     *
     * @ORM\Column(name="nom2profe", type="string", length=20, nullable=true)
     */
    private $nom2profe;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="text", length=65535, nullable=true)
     */
    private $foto;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=30, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=80, nullable=true)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fnaci", type="date", nullable=true)
     */
    private $fnaci;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="cprofe", type="string", length=4)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cprofe;


}

