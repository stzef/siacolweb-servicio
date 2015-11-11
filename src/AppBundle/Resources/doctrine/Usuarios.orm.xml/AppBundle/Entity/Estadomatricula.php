<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estadomatricula
 *
 * @ORM\Table(name="estadomatricula")
 * @ORM\Entity
 */
class Estadomatricula
{
    /**
     * @var string
     *
     * @ORM\Column(name="deta", type="string", length=20, nullable=true)
     */
    private $deta;

    /**
     * @var integer
     *
     * @ORM\Column(name="cestamatri", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cestamatri;


}

