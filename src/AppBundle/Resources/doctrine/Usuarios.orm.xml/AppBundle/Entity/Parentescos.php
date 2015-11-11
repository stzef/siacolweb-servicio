<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parentescos
 *
 * @ORM\Table(name="parentescos")
 * @ORM\Entity
 */
class Parentescos
{
    /**
     * @var string
     *
     * @ORM\Column(name="nparen", type="string", length=20, nullable=false)
     */
    private $nparen;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    private $activo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cparen", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cparen;


}

