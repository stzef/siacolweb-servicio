<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notas
 *
 * @ORM\Table(name="notas", indexes={@ORM\Index(name="notas_FKIndex1", columns={"cmate"}), @ORM\Index(name="notas_FKIndex2", columns={"calum"}), @ORM\Index(name="notas_FKIndex3", columns={"cvalotot"})})
 * @ORM\Entity
 */
class Notas
{
    /**
     * @var string
     *
     * @ORM\Column(name="ano", type="string", length=4, nullable=true)
     */
    private $ano;

    /**
     * @var string
     *
     * @ORM\Column(name="peri", type="string", length=3, nullable=true)
     */
    private $peri;

    /**
     * @var string
     *
     * @ORM\Column(name="cmate", type="string", length=6, nullable=false)
     */
    private $cmate;

    /**
     * @var string
     *
     * @ORM\Column(name="calum", type="string", length=8, nullable=false)
     */
    private $calum;

    /**
     * @var string
     *
     * @ORM\Column(name="notastot", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $notastot;

    /**
     * @var string
     *
     * @ORM\Column(name="cvalotot", type="string", length=1, nullable=true)
     */
    private $cvalotot;

    /**
     * @var string
     *
     * @ORM\Column(name="obser", type="string", length=300, nullable=true)
     */
    private $obser;

    /**
     * @var integer
     *
     * @ORM\Column(name="fj", type="integer", nullable=true)
     */
    private $fj;

    /**
     * @var integer
     *
     * @ORM\Column(name="fi", type="integer", nullable=true)
     */
    private $fi;

    /**
     * @var integer
     *
     * @ORM\Column(name="cnota", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cnota;
    
    public function getAno() {
        return $this->ano;
    }

    public function getPeri() {
        return $this->peri;
    }

    public function getCmate() {
        return $this->cmate;
    }

    public function getCalum() {
        return $this->calum;
    }

    public function getNotastot() {
        return $this->notastot;
    }

    public function getCvalotot() {
        return $this->cvalotot;
    }

    public function getObser() {
        return $this->obser;
    }

    public function getFj() {
        return $this->fj;
    }

    public function getFi() {
        return $this->fi;
    }

    public function getCnota() {
        return $this->cnota;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function setPeri($peri) {
        $this->peri = $peri;
    }

    public function setCmate($cmate) {
        $this->cmate = $cmate;
    }

    public function setCalum($calum) {
        $this->calum = $calum;
    }

    public function setNotastot($notastot) {
        $this->notastot = $notastot;
    }

    public function setCvalotot($cvalotot) {
        $this->cvalotot = $cvalotot;
    }

    public function setObser($obser) {
        $this->obser = $obser;
    }

    public function setFj($fj) {
        $this->fj = $fj;
    }

    public function setFi($fi) {
        $this->fi = $fi;
    }

    public function setCnota($cnota) {
        $this->cnota = $cnota;
    }
}

