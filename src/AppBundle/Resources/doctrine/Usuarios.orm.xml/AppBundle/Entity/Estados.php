<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estados
 *
 * @ORM\Table(name="estados")
 * @ORM\Entity
 */
class Estados
{
    /**
     * @var string
     *
     * @ORM\Column(name="nesta", type="string", length=40, nullable=true)
     */
    private $nesta;

    /**
     * @var string
     *
     * @ORM\Column(name="cesta", type="string", length=4)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cesta;


}

