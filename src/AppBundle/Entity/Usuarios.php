<?php
namespace AppBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios")
 * @ORM\Entity
 */
class Usuarios implements UserInterface
{
    /**
     * @var string
     */
    private $alias;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $clave;

    /**
     * @var \DateTime
     */
    private $fechclave;

    /**
     * @var integer
     */
    private $perfilId;

    /**
     * @var integer
     */
    private $colegiosId;

    /**
     * @var string
     */
    private $profalum;

    /**
     * @var string
     */
    private $cambcla;

    /**
     * @var string
     */
    private $ano;

    /**
     * @var string
     */
    private $peri;

    /**
     * @var boolean
     */
    private $activo = '1';

    /**
     * @var boolean
     */
    private $emailconfirm;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set alias
     *
     * @param string $alias
     *
     * @return Usuarios
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Usuarios
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set clave
     *
     * @param string $clave
     *
     * @return Usuarios
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
    }
    

    /**
     * Set fechclave
     *
     * @param \DateTime $fechclave
     *
     * @return Usuarios
     */
    public function setFechclave($fechclave)
    {
        $this->fechclave = $fechclave;

        return $this;
    }

    /**
     * Get fechclave
     *
     * @return \DateTime
     */
    public function getFechclave()
    {
        return $this->fechclave;
    }

    /**
     * Set perfilId
     *
     * @param integer $perfilId
     *
     * @return Usuarios
     */
    public function setPerfilId($perfilId)
    {
        $this->perfilId = $perfilId;

        return $this;
    }

    /**
     * Get perfilId
     *
     * @return integer
     */
    public function getPerfilId()
    {
        return $this->perfilId;
    }

    /**
     * Set colegiosId
     *
     * @param integer $colegiosId
     *
     * @return Usuarios
     */
    public function setColegiosId($colegiosId)
    {
        $this->colegiosId = $colegiosId;

        return $this;
    }

    /**
     * Get colegiosId
     *
     * @return integer
     */
    public function getColegiosId()
    {
        return $this->colegiosId;
    }

    /**
     * Set profalum
     *
     * @param string $profalum
     *
     * @return Usuarios
     */
    public function setProfalum($profalum)
    {
        $this->profalum = $profalum;

        return $this;
    }

    /**
     * Get profalum
     *
     * @return string
     */
    public function getProfalum()
    {
        return $this->profalum;
    }

    /**
     * Set cambcla
     *
     * @param string $cambcla
     *
     * @return Usuarios
     */
    public function setCambcla($cambcla)
    {
        $this->cambcla = $cambcla;

        return $this;
    }

    /**
     * Get cambcla
     *
     * @return string
     */
    public function getCambcla()
    {
        return $this->cambcla;
    }

    /**
     * Set ano
     *
     * @param string $ano
     *
     * @return Usuarios
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return string
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set peri
     *
     * @param string $peri
     *
     * @return Usuarios
     */
    public function setPeri($peri)
    {
        $this->peri = $peri;

        return $this;
    }

    /**
     * Get peri
     *
     * @return string
     */
    public function getPeri()
    {
        return $this->peri;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Usuarios
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set emailconfirm
     *
     * @param boolean $emailconfirm
     *
     * @return Usuarios
     */
    public function setEmailconfirm($emailconfirm)
    {
        $this->emailconfirm = $emailconfirm;

        return $this;
    }

    /**
     * Get emailconfirm
     *
     * @return boolean
     */
    public function getEmailconfirm()
    {
        return $this->emailconfirm;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


    //////  IMPLEMENTS FROM INTERFACE   //////////

    public function getRoles()
    {
        return array('1');
    }

     public function getSalt()
    {
        return null;
    }

    public function getPassword()
    {
        return $this->clave;
    }

    public function getUsername()
    {
        return $this->alias;
    }

    public function eraseCredentials()
    {

    }
}

