<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupos
 *
 * @ORM\Table(name="grupos", indexes={@ORM\Index(name="grupos_FKIndex1", columns={"cgrado"}), @ORM\Index(name="grupos_FKIndex2", columns={"cjorna"}), @ORM\Index(name="grupos_FKIndex3", columns={"csede"}), @ORM\Index(name="fk_grupos_profes", columns={"cdirec"})})
 * @ORM\Entity
 */
class Grupos
{
    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=2, nullable=false)
     */
    private $csede;

    /**
     * @var string
     *
     * @ORM\Column(name="cjorna", type="string", length=2, nullable=false)
     */
    private $cjorna;

    /**
     * @var string
     *
     * @ORM\Column(name="cgrado", type="string", length=2, nullable=false)
     */
    private $cgrado;

    /**
     * @var string
     *
     * @ORM\Column(name="ngrupo", type="string", length=80, nullable=true)
     */
    private $ngrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="ngrupoalt", type="string", length=80, nullable=true)
     */
    private $ngrupoalt;

    /**
     * @var string
     *
     * @ORM\Column(name="cdirec", type="string", length=4, nullable=false)
     */
    private $cdirec;

    /**
     * @var integer
     *
     * @ORM\Column(name="tifocano", type="integer", nullable=false)
     */
    private $tifocano = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="tibope", type="string", length=30, nullable=false)
     */
    private $tibope = 'boletinfinalxareas';

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="cgrupo", type="string", length=8)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cgrupo;
    
    public function getCsede() {
        return $this->csede;
    }

    public function getCjorna() {
        return $this->cjorna;
    }

    public function getCgrado() {
        return $this->cgrado;
    }

    public function getNgrupo() {
        return $this->ngrupo;
    }

    public function getNgrupoalt() {
        return $this->ngrupoalt;
    }

    public function getCdirec() {
        return $this->cdirec;
    }

    public function getTifocano() {
        return $this->tifocano;
    }

    public function getTibope() {
        return $this->tibope;
    }

    public function getActivo() {
        return $this->activo;
    }

    public function getCgrupo() {
        return $this->cgrupo;
    }

    public function setCsede($csede) {
        $this->csede = $csede;
    }

    public function setCjorna($cjorna) {
        $this->cjorna = $cjorna;
    }

    public function setCgrado($cgrado) {
        $this->cgrado = $cgrado;
    }

    public function setNgrupo($ngrupo) {
        $this->ngrupo = $ngrupo;
    }

    public function setNgrupoalt($ngrupoalt) {
        $this->ngrupoalt = $ngrupoalt;
    }

    public function setCdirec($cdirec) {
        $this->cdirec = $cdirec;
    }

    public function setTifocano($tifocano) {
        $this->tifocano = $tifocano;
    }

    public function setTibope($tibope) {
        $this->tibope = $tibope;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
    }

    public function setCgrupo($cgrupo) {
        $this->cgrupo = $cgrupo;
    }


}

