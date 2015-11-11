<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Votagru
 *
 * @ORM\Table(name="votagru", indexes={@ORM\Index(name="votagru_vota_cvota", columns={"cvota"}), @ORM\Index(name="votagru_grupos_cgrupo", columns={"cgrupo"})})
 * @ORM\Entity
 */
class Votagru
{
    /**
     * @var string
     *
     * @ORM\Column(name="cvota", type="string", length=4, nullable=false)
     */
    private $cvota;

    /**
     * @var string
     *
     * @ORM\Column(name="cgrupo", type="string", length=8, nullable=false)
     */
    private $cgrupo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cvotagru", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cvotagru;


}

