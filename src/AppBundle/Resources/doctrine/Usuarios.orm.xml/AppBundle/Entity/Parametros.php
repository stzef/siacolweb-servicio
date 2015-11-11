<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametros
 *
 * @ORM\Table(name="parametros")
 * @ORM\Entity
 */
class Parametros
{
    /**
     * @var string
     *
     * @ORM\Column(name="nparam", type="string", length=30, nullable=false)
     */
    private $nparam;

    /**
     * @var string
     *
     * @ORM\Column(name="param1", type="string", length=10, nullable=true)
     */
    private $param1;

    /**
     * @var string
     *
     * @ORM\Column(name="param2", type="text", length=65535, nullable=true)
     */
    private $param2;

    /**
     * @var string
     *
     * @ORM\Column(name="param3", type="string", length=5, nullable=true)
     */
    private $param3;

    /**
     * @var string
     *
     * @ORM\Column(name="cparam", type="string", length=3)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cparam;


}

