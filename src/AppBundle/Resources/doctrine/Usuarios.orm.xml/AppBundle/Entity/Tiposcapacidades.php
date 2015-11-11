<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tiposcapacidades
 *
 * @ORM\Table(name="tiposcapacidades")
 * @ORM\Entity
 */
class Tiposcapacidades
{
    /**
     * @var string
     *
     * @ORM\Column(name="deta", type="string", length=30, nullable=true)
     */
    private $deta;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipcapacidades", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipcapacidades;


}

