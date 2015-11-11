<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tivalo
 *
 * @ORM\Table(name="tivalo")
 * @ORM\Entity
 */
class Tivalo
{
    /**
     * @var string
     *
     * @ORM\Column(name="nvalo", type="string", length=40, nullable=true)
     */
    private $nvalo;

    /**
     * @var string
     *
     * @ORM\Column(name="ctivalo", type="string", length=1)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ctivalo;


}

