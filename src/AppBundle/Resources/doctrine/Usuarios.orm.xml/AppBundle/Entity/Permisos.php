<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permisos
 *
 * @ORM\Table(name="permisos", indexes={@ORM\Index(name="codperfil", columns={"codperfil"}), @ORM\Index(name="opcion", columns={"opcion"})})
 * @ORM\Entity
 */
class Permisos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="codperfil", type="integer", nullable=false)
     */
    private $codperfil;

    /**
     * @var integer
     *
     * @ORM\Column(name="opcion", type="integer", nullable=false)
     */
    private $opcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="item", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $item;


}

