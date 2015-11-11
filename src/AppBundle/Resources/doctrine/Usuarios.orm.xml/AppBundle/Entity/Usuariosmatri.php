<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuariosmatri
 *
 * @ORM\Table(name="usuariosmatri", uniqueConstraints={@ORM\UniqueConstraint(name="alias", columns={"alias"})})
 * @ORM\Entity
 */
class Usuariosmatri
{
    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=20, nullable=false)
     */
    private $alias;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="text", length=65535, nullable=false)
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="perfilid", type="string", length=20, nullable=false)
     */
    private $perfilid;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

