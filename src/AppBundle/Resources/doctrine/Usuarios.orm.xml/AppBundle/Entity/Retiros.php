<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Retiros
 *
 * @ORM\Table(name="retiros")
 * @ORM\Entity
 */
class Retiros
{
    /**
     * @var string
     *
     * @ORM\Column(name="nretiro", type="string", length=40, nullable=false)
     */
    private $nretiro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    private $activo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cretiro", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cretiro;


}

