<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Periodos
 *
 * @ORM\Table(name="periodos")
 * @ORM\Entity
 */
class Periodos
{
    /**
     * @var string
     *
     * @ORM\Column(name="sigla", type="string", length=3, nullable=false)
     */
    private $sigla;

    /**
     * @var string
     *
     * @ORM\Column(name="nperi", type="string", length=40, nullable=false)
     */
    private $nperi;

    /**
     * @var integer
     *
     * @ORM\Column(name="peso", type="integer", nullable=false)
     */
    private $peso;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=false)
     */
    private $orden;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=1, nullable=false)
     */
    private $tipo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado", type="boolean", nullable=false)
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="mesi", type="integer", nullable=true)
     */
    private $mesi;

    /**
     * @var integer
     *
     * @ORM\Column(name="mesf", type="integer", nullable=true)
     */
    private $mesf;

    /**
     * @var string
     *
     * @ORM\Column(name="ano", type="string", length=5, nullable=false)
     */
    private $ano;

    /**
     * @var string
     *
     * @ORM\Column(name="cperi", type="string", length=3)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cperi;

    
    public function getSigla() {
        return $this->sigla;
    }

    public function getNperi() {
        return $this->nperi;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getOrden() {
        return $this->orden;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getMesi() {
        return $this->mesi;
    }

    public function getMesf() {
        return $this->mesf;
    }

    public function getAno() {
        return $this->ano;
    }

    public function getCperi() {
        return $this->cperi;
    }

    public function setSigla($sigla) {
        $this->sigla = $sigla;
    }

    public function setNperi($nperi) {
        $this->nperi = $nperi;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function setOrden($orden) {
        $this->orden = $orden;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function setMesi($mesi) {
        $this->mesi = $mesi;
    }

    public function setMesf($mesf) {
        $this->mesf = $mesf;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function setCperi($cperi) {
        $this->cperi = $cperi;
    }
}

