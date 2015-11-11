<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipedu
 *
 * @ORM\Table(name="tipedu")
 * @ORM\Entity
 */
class Tipedu
{
    /**
     * @var string
     *
     * @ORM\Column(name="ntipedu", type="string", length=15, nullable=false)
     */
    private $ntipedu;

    /**
     * @var string
     *
     * @ORM\Column(name="ihsest", type="string", length=3, nullable=true)
     */
    private $ihsest;

    /**
     * @var string
     *
     * @ORM\Column(name="ctipedu", type="string", length=1)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ctipedu;


}

