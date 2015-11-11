<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planestu
 *
 * @ORM\Table(name="planestu", indexes={@ORM\Index(name="planestu_FKIndex1", columns={"cgrupo"}), @ORM\Index(name="planestu_FKIndex2", columns={"cmate"}), @ORM\Index(name="planestu_FKIndex3", columns={"cprofe"})})
 * @ORM\Entity
 */
class Planestu
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="ifperi1", type="boolean", nullable=false)
     */
    private $ifperi1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ifperi2", type="boolean", nullable=false)
     */
    private $ifperi2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ifperi3", type="boolean", nullable=false)
     */
    private $ifperi3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ifperi4", type="boolean", nullable=false)
     */
    private $ifperi4;

    /**
     * @var string
     *
     * @ORM\Column(name="peso", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $peso;

    /**
     * @var integer
     *
     * @ORM\Column(name="ihs", type="integer", nullable=false)
     */
    private $ihs;

    /**
     * @var boolean
     *
     * @ORM\Column(name="calif", type="boolean", nullable=false)
     */
    private $calif = '1';

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
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cgrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="cprofe", type="string", length=4)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cprofe;

    /**
     * @var string
     *
     * @ORM\Column(name="cmate", type="string", length=6)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cmate;

    public function getIfperi1() {
        return $this->ifperi1;
    }

    public function getIfperi2() {
        return $this->ifperi2;
    }

    public function getIfperi3() {
        return $this->ifperi3;
    }

    public function getIfperi4() {
        return $this->ifperi4;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getIhs() {
        return $this->ihs;
    }

    public function getCalif() {
        return $this->calif;
    }

    public function getActivo() {
        return $this->activo;
    }

    public function getCgrupo() {
        return $this->cgrupo;
    }

    public function getCprofe() {
        return $this->cprofe;
    }

    public function getCmate() {
        return $this->cmate;
    }

    public function setIfperi1($ifperi1) {
        $this->ifperi1 = $ifperi1;
    }

    public function setIfperi2($ifperi2) {
        $this->ifperi2 = $ifperi2;
    }

    public function setIfperi3($ifperi3) {
        $this->ifperi3 = $ifperi3;
    }

    public function setIfperi4($ifperi4) {
        $this->ifperi4 = $ifperi4;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function setIhs($ihs) {
        $this->ihs = $ihs;
    }

    public function setCalif($calif) {
        $this->calif = $calif;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
    }

    public function setCgrupo($cgrupo) {
        $this->cgrupo = $cgrupo;
    }

    public function setCprofe($cprofe) {
        $this->cprofe = $cprofe;
    }

    public function setCmate($cmate) {
        $this->cmate = $cmate;
    }
}

