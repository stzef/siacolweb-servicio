<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sufragios
 *
 * @ORM\Table(name="sufragios", indexes={@ORM\Index(name="sufragios_vota_cvota", columns={"cvota"}), @ORM\Index(name="sufragios_propu_cpropu", columns={"cpropu"}), @ORM\Index(name="sufragios_usuarios_cusu", columns={"cusu"})})
 * @ORM\Entity
 */
class Sufragios
{
    /**
     * @var string
     *
     * @ORM\Column(name="cvota", type="string", length=4, nullable=false)
     */
    private $cvota;

    /**
     * @var string
     *
     * @ORM\Column(name="cpropu", type="string", length=4, nullable=false)
     */
    private $cpropu;

    /**
     * @var string
     *
     * @ORM\Column(name="npropu", type="string", length=200, nullable=true)
     */
    private $npropu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fhsufra", type="datetime", nullable=true)
     */
    private $fhsufra;

    /**
     * @var integer
     *
     * @ORM\Column(name="cusu", type="integer", nullable=true)
     */
    private $cusu;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ifacti", type="boolean", nullable=true)
     */
    private $ifacti;

    /**
     * @var string
     *
     * @ORM\Column(name="csufra", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $csufra;


}

