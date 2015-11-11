<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Municipios
 *
 * @ORM\Table(name="municipios", indexes={@ORM\Index(name="cdepto", columns={"cdepto"})})
 * @ORM\Entity
 */
class Municipios
{
    /**
     * @var string
     *
     * @ORM\Column(name="cdepto", type="string", length=4, nullable=false)
     */
    private $cdepto;

    /**
     * @var string
     *
     * @ORM\Column(name="deta", type="string", length=45, nullable=true)
     */
    private $deta;

    /**
     * @var string
     *
     * @ORM\Column(name="cmuni", type="string", length=6)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cmuni;


}

