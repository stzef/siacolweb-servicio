<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Colegios
 *
 * @ORM\Table(name="colegios")
 * @ORM\Entity
 */
class Colegios
{
    /**
     * @var string
     *
     * @ORM\Column(name="ccole", type="string", length=9, nullable=false)
     */
    private $ccole;

    /**
     * @var string
     *
     * @ORM\Column(name="ncole", type="string", length=80, nullable=true)
     */
    private $ncole;

    /**
     * @var string
     *
     * @ORM\Column(name="nit", type="string", length=9, nullable=true)
     */
    private $nit;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=15, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=60, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="dv", type="string", length=1, nullable=true)
     */
    private $dv;

    /**
     * @var string
     *
     * @ORM\Column(name="cdepto", type="string", length=4, nullable=false)
     */
    private $cdepto;

    /**
     * @var string
     *
     * @ORM\Column(name="cmuni", type="string", length=6, nullable=false)
     */
    private $cmuni;

    /**
     * @var string
     *
     * @ORM\Column(name="anoelect", type="string", length=5, nullable=false)
     */
    private $anoelect;

    /**
     * @var string
     *
     * @ORM\Column(name="cdanenuevo", type="string", length=20, nullable=false)
     */
    private $cdanenuevo;

    /**
     * @var string
     *
     * @ORM\Column(name="cdaneantiguo", type="string", length=20, nullable=false)
     */
    private $cdaneantiguo;

    /**
     * @var string
     *
     * @ORM\Column(name="consecutivo", type="string", length=20, nullable=false)
     */
    private $consecutivo;

    /**
     * @var string
     *
     * @ORM\Column(name="rector", type="string", length=80, nullable=true)
     */
    private $rector;

    /**
     * @var string
     *
     * @ORM\Column(name="idrector", type="string", length=12, nullable=true)
     */
    private $idrector;

    /**
     * @var string
     *
     * @ORM\Column(name="secretario", type="string", length=80, nullable=true)
     */
    private $secretario;

    /**
     * @var string
     *
     * @ORM\Column(name="idsecretario", type="string", length=12, nullable=false)
     */
    private $idsecretario;

    /**
     * @var string
     *
     * @ORM\Column(name="nrapido", type="string", length=20, nullable=true)
     */
    private $nrapido;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cerrado", type="boolean", nullable=true)
     */
    private $cerrado;

    /**
     * @var string
     *
     * @ORM\Column(name="logo1", type="string", length=60, nullable=true)
     */
    private $logo1;

    /**
     * @var string
     *
     * @ORM\Column(name="logo2", type="string", length=60, nullable=true)
     */
    private $logo2;

    /**
     * @var string
     *
     * @ORM\Column(name="logo3", type="string", length=100, nullable=true)
     */
    private $logo3;

    /**
     * @var string
     *
     * @ORM\Column(name="logo4", type="string", length=60, nullable=true)
     */
    private $logo4;

    /**
     * @var string
     *
     * @ORM\Column(name="logo5", type="string", length=60, nullable=true)
     */
    private $logo5;

    /**
     * @var string
     *
     * @ORM\Column(name="banner1", type="string", length=100, nullable=true)
     */
    private $banner1;

    /**
     * @var string
     *
     * @ORM\Column(name="banner2", type="string", length=100, nullable=true)
     */
    private $banner2;

    /**
     * @var string
     *
     * @ORM\Column(name="banner3", type="string", length=100, nullable=true)
     */
    private $banner3;

    /**
     * @var string
     *
     * @ORM\Column(name="banner4", type="string", length=100, nullable=true)
     */
    private $banner4;

    /**
     * @var string
     *
     * @ORM\Column(name="banner5", type="string", length=100, nullable=true)
     */
    private $banner5;

    /**
     * @var string
     *
     * @ORM\Column(name="emailpnotas", type="string", length=80, nullable=false)
     */
    private $emailpnotas;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    public function getCcole() {
        return $this->ccole;
    }

    public function getNcole() {
        return $this->ncole;
    }

    public function getNit() {
        return $this->nit;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getDv() {
        return $this->dv;
    }

    public function getCdepto() {
        return $this->cdepto;
    }

    public function getCmuni() {
        return $this->cmuni;
    }

    public function getAnoelect() {
        return $this->anoelect;
    }

    public function getCdanenuevo() {
        return $this->cdanenuevo;
    }

    public function getCdaneantiguo() {
        return $this->cdaneantiguo;
    }

    public function getConsecutivo() {
        return $this->consecutivo;
    }

    public function getRector() {
        return $this->rector;
    }

    public function getIdrector() {
        return $this->idrector;
    }

    public function getSecretario() {
        return $this->secretario;
    }

    public function getIdsecretario() {
        return $this->idsecretario;
    }

    public function getNrapido() {
        return $this->nrapido;
    }

    public function getActivo() {
        return $this->activo;
    }

    public function getCerrado() {
        return $this->cerrado;
    }

    public function getLogo1() {
        return $this->logo1;
    }

    public function getLogo2() {
        return $this->logo2;
    }

    public function getLogo3() {
        return $this->logo3;
    }

    public function getLogo4() {
        return $this->logo4;
    }

    public function getLogo5() {
        return $this->logo5;
    }

    public function getBanner1() {
        return $this->banner1;
    }

    public function getBanner2() {
        return $this->banner2;
    }

    public function getBanner3() {
        return $this->banner3;
    }

    public function getBanner4() {
        return $this->banner4;
    }

    public function getBanner5() {
        return $this->banner5;
    }

    public function getEmailpnotas() {
        return $this->emailpnotas;
    }

    public function getId() {
        return $this->id;
    }

    public function setCcole($ccole) {
        $this->ccole = $ccole;
    }

    public function setNcole($ncole) {
        $this->ncole = $ncole;
    }

    public function setNit($nit) {
        $this->nit = $nit;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setDv($dv) {
        $this->dv = $dv;
    }

    public function setCdepto($cdepto) {
        $this->cdepto = $cdepto;
    }

    public function setCmuni($cmuni) {
        $this->cmuni = $cmuni;
    }

    public function setAnoelect($anoelect) {
        $this->anoelect = $anoelect;
    }

    public function setCdanenuevo($cdanenuevo) {
        $this->cdanenuevo = $cdanenuevo;
    }

    public function setCdaneantiguo($cdaneantiguo) {
        $this->cdaneantiguo = $cdaneantiguo;
    }

    public function setConsecutivo($consecutivo) {
        $this->consecutivo = $consecutivo;
    }

    public function setRector($rector) {
        $this->rector = $rector;
    }

    public function setIdrector($idrector) {
        $this->idrector = $idrector;
    }

    public function setSecretario($secretario) {
        $this->secretario = $secretario;
    }

    public function setIdsecretario($idsecretario) {
        $this->idsecretario = $idsecretario;
    }

    public function setNrapido($nrapido) {
        $this->nrapido = $nrapido;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
    }

    public function setCerrado($cerrado) {
        $this->cerrado = $cerrado;
    }

    public function setLogo1($logo1) {
        $this->logo1 = $logo1;
    }

    public function setLogo2($logo2) {
        $this->logo2 = $logo2;
    }

    public function setLogo3($logo3) {
        $this->logo3 = $logo3;
    }

    public function setLogo4($logo4) {
        $this->logo4 = $logo4;
    }

    public function setLogo5($logo5) {
        $this->logo5 = $logo5;
    }

    public function setBanner1($banner1) {
        $this->banner1 = $banner1;
    }

    public function setBanner2($banner2) {
        $this->banner2 = $banner2;
    }

    public function setBanner3($banner3) {
        $this->banner3 = $banner3;
    }

    public function setBanner4($banner4) {
        $this->banner4 = $banner4;
    }

    public function setBanner5($banner5) {
        $this->banner5 = $banner5;
    }

    public function setEmailpnotas($emailpnotas) {
        $this->emailpnotas = $emailpnotas;
    }

    public function setId($id) {
        $this->id = $id;
    }
}

