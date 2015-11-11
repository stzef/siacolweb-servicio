<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresas
 *
 * @ORM\Table(name="empresas")
 * @ORM\Entity
 */
class Empresas
{
    /**
     * @var string
     *
     * @ORM\Column(name="nempre", type="string", length=80, nullable=false)
     */
    private $nempre;

    /**
     * @var string
     *
     * @ORM\Column(name="descrip", type="text", length=65535, nullable=true)
     */
    private $descrip;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="text", length=65535, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="enviroment", type="string", length=20, nullable=false)
     */
    private $enviroment;

    /**
     * @var string
     *
     * @ORM\Column(name="redirec", type="string", length=1, nullable=false)
     */
    private $redirec = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="lnk", type="string", length=100, nullable=false)
     */
    private $lnk;

    /**
     * @var string
     *
     * @ORM\Column(name="cempre", type="string", length=8)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cempre;
    
    /**
     * Set nempre
     *
     * @param string $nempre
     *
     * @return Empresas
     */
    public function setNempre($nempre)
    {
        $this->nempre = $nempre;

        return $this;
    }

    /**
     * Get nempre
     *
     * @return string
     */
    public function getNempre()
    {
        return $this->nempre;
    }

    /**
     * Set descrip
     *
     * @param string $descrip
     *
     * @return Empresas
     */
    public function setDescrip($descrip)
    {
        $this->descrip = $descrip;

        return $this;
    }

    /**
     * Get descrip
     *
     * @return string
     */
    public function getDescrip()
    {
        return $this->descrip;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Empresas
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set enviroment
     *
     * @param string $enviroment
     *
     * @return Empresas
     */
    public function setEnviroment($enviroment)
    {
        $this->enviroment = $enviroment;

        return $this;
    }

    /**
     * Get enviroment
     *
     * @return string
     */
    public function getEnviroment()
    {
        return $this->enviroment;
    }

    /**
     * Set redirec
     *
     * @param string $redirec
     *
     * @return Empresas
     */
    public function setRedirec($redirec)
    {
        $this->redirec = $redirec;

        return $this;
    }

    /**
     * Get redirec
     *
     * @return string
     */
    public function getRedirec()
    {
        return $this->redirec;
    }

    /**
     * Set lnk
     *
     * @param string $lnk
     *
     * @return Empresas
     */
    public function setLnk($lnk)
    {
        $this->lnk = $lnk;

        return $this;
    }

    /**
     * Get lnk
     *
     * @return string
     */
    public function getLnk()
    {
        return $this->lnk;
    }

    /**
     * Get cempre
     *
     * @return string
     */
    public function getCempre()
    {
        return $this->cempre;
    }
}
