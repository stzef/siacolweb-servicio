<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table(name="menu", indexes={@ORM\Index(name="menu_item", columns={"menu_item"})})
 * @ORM\Entity
 */
class Menu
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=false)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="menu_item", type="integer", nullable=true)
     */
    private $menuItem;

    /**
     * @var string
     *
     * @ORM\Column(name="controlador", type="string", length=70, nullable=true)
     */
    private $controlador;

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text", length=65535, nullable=true)
     */
    private $info;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=false)
     */
    private $orden;

    /**
     * @var string
     *
     * @ORM\Column(name="target", type="string", nullable=true)
     */
    private $target;

    /**
     * @var integer
     *
     * @ORM\Column(name="item", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $item;


}

