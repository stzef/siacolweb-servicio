<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alumnos
 *
 * @ORM\Table(name="alumnos", indexes={@ORM\Index(name="alumnos_FKIndex1", columns={"cgrupo"}), @ORM\Index(name="alumnos_FKIndex2", columns={"cesta"}), @ORM\Index(name="fk_alumnos_tiposdoc", columns={"ctipo"}), @ORM\Index(name="cmuniexpe", columns={"cmuniexpe"}), @ORM\Index(name="cdeptoexpe", columns={"cdeptoexpe"})})
 * @ORM\Entity
 */
class Alumnos
{
    /**
     * @var string
     *
     * @ORM\Column(name="idalum", type="string", length=12, nullable=true)
     */
    private $idalum;

    /**
     * @var string
     *
     * @ORM\Column(name="ape1alum", type="string", length=20, nullable=false)
     */
    private $ape1alum;

    /**
     * @var string
     *
     * @ORM\Column(name="ape2alum", type="string", length=20, nullable=true)
     */
    private $ape2alum;

    /**
     * @var string
     *
     * @ORM\Column(name="nom1alum", type="string", length=20, nullable=true)
     */
    private $nom1alum;

    /**
     * @var string
     *
     * @ORM\Column(name="nom2alum", type="string", length=20, nullable=true)
     */
    private $nom2alum;

    /**
     * @var string
     *
     * @ORM\Column(name="repeco", type="string", length=80, nullable=true)
     */
    private $repeco;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fnaci", type="date", nullable=true)
     */
    private $fnaci;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="text", length=65535, nullable=true)
     */
    private $foto;

    /**
     * @var string
     *
     * @ORM\Column(name="rh", type="string", length=4, nullable=true)
     */
    private $rh;

    /**
     * @var string
     *
     * @ORM\Column(name="restric", type="string", nullable=true)
     */
    private $restric = 'F';

    /**
     * @var string
     *
     * @ORM\Column(name="obsealum", type="string", length=100, nullable=true)
     */
    private $obsealum;

    /**
     * @var integer
     *
     * @ORM\Column(name="usuobse", type="integer", nullable=true)
     */
    private $usuobse;

    /**
     * @var string
     *
     * @ORM\Column(name="obseboletin", type="text", length=65535, nullable=true)
     */
    private $obseboletin;

    /**
     * @var string
     *
     * @ORM\Column(name="calum", type="string", length=8)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $calum;

    /**
     * @var \AppBundle\Entity\Estados
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Estados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cesta", referencedColumnName="cesta")
     * })
     */
    private $cesta;

    /**
     * @var \AppBundle\Entity\Tiposdoc
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tiposdoc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ctipo", referencedColumnName="ctipo")
     * })
     */
    private $ctipo;

    /**
     * @var \AppBundle\Entity\Grupos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Grupos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cgrupo", referencedColumnName="cgrupo")
     * })
     */
    private $cgrupo;

    /**
     * @var \AppBundle\Entity\Departamentos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Departamentos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cdeptoexpe", referencedColumnName="cdepto")
     * })
     */
    private $cdeptoexpe;

    /**
     * @var \AppBundle\Entity\Municipios
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Municipios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cmuniexpe", referencedColumnName="cmuni")
     * })
     */
    private $cmuniexpe;

    public function getIdalum() {
        return $this->idalum;
    }

    public function getApe1alum() {
        return $this->ape1alum;
    }

    public function getApe2alum() {
        return $this->ape2alum;
    }

    public function getNom1alum() {
        return $this->nom1alum;
    }

    public function getNom2alum() {
        return $this->nom2alum;
    }

    public function getRepeco() {
        return $this->repeco;
    }

    public function getFnaci() {
        return $this->fnaci;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function getRh() {
        return $this->rh;
    }

    public function getRestric() {
        return $this->restric;
    }

    public function getObsealum() {
        return $this->obsealum;
    }

    public function getUsuobse() {
        return $this->usuobse;
    }

    public function getObseboletin() {
        return $this->obseboletin;
    }

    public function getCalum() {
        return $this->calum;
    }

    public function getCesta() {
        return $this->cesta;
    }

    public function getCtipo() {
        return $this->ctipo;
    }

    public function getCgrupo() {
        return $this->cgrupo;
    }

    public function getCdeptoexpe() {
        return $this->cdeptoexpe;
    }

    public function getCmuniexpe() {
        return $this->cmuniexpe;
    }

    public function setIdalum($idalum) {
        $this->idalum = $idalum;
    }

    public function setApe1alum($ape1alum) {
        $this->ape1alum = $ape1alum;
    }

    public function setApe2alum($ape2alum) {
        $this->ape2alum = $ape2alum;
    }

    public function setNom1alum($nom1alum) {
        $this->nom1alum = $nom1alum;
    }

    public function setNom2alum($nom2alum) {
        $this->nom2alum = $nom2alum;
    }

    public function setRepeco($repeco) {
        $this->repeco = $repeco;
    }

    public function setFnaci(\DateTime $fnaci) {
        $this->fnaci = $fnaci;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }

    public function setRh($rh) {
        $this->rh = $rh;
    }

    public function setRestric($restric) {
        $this->restric = $restric;
    }

    public function setObsealum($obsealum) {
        $this->obsealum = $obsealum;
    }

    public function setUsuobse($usuobse) {
        $this->usuobse = $usuobse;
    }

    public function setObseboletin($obseboletin) {
        $this->obseboletin = $obseboletin;
    }

    public function setCalum($calum) {
        $this->calum = $calum;
    }

    public function setCesta(\AppBundle\Entity\Estados $cesta) {
        $this->cesta = $cesta;
    }

    public function setCtipo(\AppBundle\Entity\Tiposdoc $ctipo) {
        $this->ctipo = $ctipo;
    }

    public function setCgrupo(\AppBundle\Entity\Grupos $cgrupo) {
        $this->cgrupo = $cgrupo;
    }

    public function setCdeptoexpe(\AppBundle\Entity\Departamentos $cdeptoexpe) {
        $this->cdeptoexpe = $cdeptoexpe;
    }

    public function setCmuniexpe(\AppBundle\Entity\Municipios $cmuniexpe) {
        $this->cmuniexpe = $cmuniexpe;
    }


}

