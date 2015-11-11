<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bancos
 *
 * @ORM\Table(name="bancos")
 * @ORM\Entity
 */
class Bancos
{
    /**
     * @var string
     *
     * @ORM\Column(name="nban", type="string", length=60, nullable=true)
     */
    private $nban;

    /**
     * @var string
     *
     * @ORM\Column(name="activo", type="string", length=1, nullable=true)
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="cban", type="string", length=2)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cban;


}

