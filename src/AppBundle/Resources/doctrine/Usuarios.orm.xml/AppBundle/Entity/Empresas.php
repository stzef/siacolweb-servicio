<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresas
 *
 * @ORM\Table(name="empresas")
 * @ORM\Entity
 */
class Empresas
{
    /**
     * @var string
     *
     * @ORM\Column(name="nempre", type="string", length=80, nullable=false)
     */
    private $nempre;

    /**
     * @var string
     *
     * @ORM\Column(name="descrip", type="text", length=65535, nullable=true)
     */
    private $descrip;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="text", length=65535, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="enviroment", type="string", length=20, nullable=false)
     */
    private $enviroment;

    /**
     * @var string
     *
     * @ORM\Column(name="redirec", type="string", length=1, nullable=false)
     */
    private $redirec = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="lnk", type="string", length=100, nullable=false)
     */
    private $lnk;

    /**
     * @var string
     *
     * @ORM\Column(name="cempre", type="string", length=8)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cempre;


}

