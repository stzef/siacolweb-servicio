<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tiposdiscapacidades
 *
 * @ORM\Table(name="tiposdiscapacidades")
 * @ORM\Entity
 */
class Tiposdiscapacidades
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
     * @ORM\Column(name="idtipdisca", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipdisca;


}

