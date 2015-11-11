<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departamentos
 *
 * @ORM\Table(name="departamentos")
 * @ORM\Entity
 */
class Departamentos
{
    /**
     * @var string
     *
     * @ORM\Column(name="deta", type="string", length=45, nullable=true)
     */
    private $deta;

    /**
     * @var string
     *
     * @ORM\Column(name="cdepto", type="string", length=4)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cdepto;


}

