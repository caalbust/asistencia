<?php

namespace ControlacFIEC\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuarioRol
 *
 * @ORM\Table(name="usuario_rol", indexes={@ORM\Index(name="IDX_72EDD1A44BAB96C", columns={"rol_id"}), @ORM\Index(name="IDX_72EDD1A4DB38439E", columns={"usuario_id"})})
 * @ORM\Entity
 */
class UsuarioRol
{
    /**
     * @var integer
     *
     * @ORM\Column(name="usuario_rol_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="usuario_rol_usuario_rol_id_seq", allocationSize=1, initialValue=1)
     */
    private $usuarioRolId;

    /**
     * @var \ControlacFIEC\TodoBundle\Entity\Rol
     *
     * @ORM\ManyToOne(targetEntity="ControlacFIEC\TodoBundle\Entity\Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rol_id", referencedColumnName="rol_id")
     * })
     */
    private $rol;

    /**
     * @var \ControlacFIEC\TodoBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="ControlacFIEC\TodoBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="user_id")
     * })
     */
    private $usuario;



    /**
     * Get the value of usuarioRolId
     *
     * @return  integer
     */ 
    public function getUsuarioRolId()
    {
        return $this->usuarioRolId;
    }

    /**
     * Set the value of usuarioRolId
     *
     * @param  integer  $usuarioRolId
     *
     * @return  self
     */ 
    public function setUsuarioRolId($usuarioRolId)
    {
        $this->usuarioRolId = $usuarioRolId;

        return $this;
    }

    /**
     * Get the value of rol
     *
     * @return  \ControlacFIEC\TodoBundle\Entity\Rol
     */ 
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set the value of rol
     *
     * @param  \ControlacFIEC\TodoBundle\Entity\Rol  $rol
     *
     * @return  self
     */ 
    public function setRol(\ControlacFIEC\TodoBundle\Entity\Rol $rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get the value of usuario
     *
     * @return  \ControlacFIEC\TodoBundle\Entity\Usuario
     */ 
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @param  \ControlacFIEC\TodoBundle\Entity\Usuario  $usuario
     *
     * @return  self
     */ 
    public function setUsuario(\ControlacFIEC\TodoBundle\Entity\Usuario $usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }
}

