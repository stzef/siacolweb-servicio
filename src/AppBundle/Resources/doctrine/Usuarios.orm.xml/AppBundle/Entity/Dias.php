<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dias
 *
 * @ORM\Table(name="dias")
 * @ORM\Entity
 */
class Dias
{
    /**
     * @var string
     *
     * @ORM\Column(name="ndia", type="string", length=20, nullable=false)
     */
    private $ndia;

    /**
     * @var string
     *
     * @ORM\Column(name="cdia", type="string", length=1)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cdia;


}

