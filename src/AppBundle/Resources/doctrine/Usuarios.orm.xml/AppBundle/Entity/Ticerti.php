<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticerti
 *
 * @ORM\Table(name="ticerti")
 * @ORM\Entity
 */
class Ticerti
{
    /**
     * @var string
     *
     * @ORM\Column(name="nticerti", type="string", length=60, nullable=false)
     */
    private $nticerti;

    /**
     * @var integer
     *
     * @ORM\Column(name="cticerti", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cticerti;


}

