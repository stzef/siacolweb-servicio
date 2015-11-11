<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materias
 *
 * @ORM\Table(name="materias")
 * @ORM\Entity
 */
class Materias
{
    /**
     * @var string
     *
     * @ORM\Column(name="nmate", type="string", length=80, nullable=true)
     */
    private $nmate;

    /**
     * @var string
     *
     * @ORM\Column(name="nmatealt", type="string", length=80, nullable=true)
     */
    private $nmatealt;

    /**
     * @var string
     *
     * @ORM\Column(name="sigla", type="string", length=10, nullable=true)
     */
    private $sigla;

    /**
     * @var string
     *
     * @ORM\Column(name="timate", type="string", length=1, nullable=true)
     */
    private $timate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="promefin", type="boolean", nullable=true)
     */
    private $promefin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ifmateexclu", type="boolean", nullable=false)
     */
    private $ifmateexclu = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ihs", type="integer", nullable=true)
     */
    private $ihs;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=true)
     */
    private $orden;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="cmate", type="string", length=6)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cmate;
    
    public function getNmate() {
        return $this->nmate;
    }

    public function getNmatealt() {
        return $this->nmatealt;
    }

    public function getSigla() {
        return $this->sigla;
    }

    public function getTimate() {
        return $this->timate;
    }

    public function getPromefin() {
        return $this->promefin;
    }

    public function getIfmateexclu() {
        return $this->ifmateexclu;
    }

    public function getIhs() {
        return $this->ihs;
    }

    public function getOrden() {
        return $this->orden;
    }

    public function getActivo() {
        return $this->activo;
    }

    public function getCmate() {
        return $this->cmate;
    }

    public function setNmate($nmate) {
        $this->nmate = $nmate;
    }

    public function setNmatealt($nmatealt) {
        $this->nmatealt = $nmatealt;
    }

    public function setSigla($sigla) {
        $this->sigla = $sigla;
    }

    public function setTimate($timate) {
        $this->timate = $timate;
    }

    public function setPromefin($promefin) {
        $this->promefin = $promefin;
    }

    public function setIfmateexclu($ifmateexclu) {
        $this->ifmateexclu = $ifmateexclu;
    }

    public function setIhs($ihs) {
        $this->ihs = $ihs;
    }

    public function setOrden($orden) {
        $this->orden = $orden;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
    }

    public function setCmate($cmate) {
        $this->cmate = $cmate;
    }



}

