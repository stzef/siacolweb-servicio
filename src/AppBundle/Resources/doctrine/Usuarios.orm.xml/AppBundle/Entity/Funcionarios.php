<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Funcionarios
 *
 * @ORM\Table(name="funcionarios", indexes={@ORM\Index(name="fk_funcionarios_tiposdoc", columns={"ctipo"})})
 * @ORM\Entity
 */
class Funcionarios
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
     * @ORM\Column(name="idfunci", type="string", length=12, nullable=true)
     */
    private $idfunci;

    /**
     * @var string
     *
     * @ORM\Column(name="ape1funci", type="string", length=20, nullable=true)
     */
    private $ape1funci;

    /**
     * @var string
     *
     * @ORM\Column(name="ape2funci", type="string", length=20, nullable=true)
     */
    private $ape2funci;

    /**
     * @var string
     *
     * @ORM\Column(name="nom1funci", type="string", length=20, nullable=true)
     */
    private $nom1funci;

    /**
     * @var string
     *
     * @ORM\Column(name="nom2funci", type="string", length=20, nullable=true)
     */
    private $nom2funci;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="text", length=65535, nullable=true)
     */
    private $foto;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=80, nullable=true)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="cfunci", type="string", length=4)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cfunci;


}

