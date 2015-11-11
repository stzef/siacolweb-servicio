<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Timovi
 *
 * @ORM\Table(name="timovi")
 * @ORM\Entity
 */
class Timovi
{
    /**
     * @var string
     *
     * @ORM\Column(name="ntimovi", type="string", length=60, nullable=true)
     */
    private $ntimovi;

    /**
     * @var string
     *
     * @ORM\Column(name="prefijo", type="string", length=2, nullable=true)
     */
    private $prefijo;

    /**
     * @var string
     *
     * @ORM\Column(name="ctimovi", type="string", length=4)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ctimovi;


}

