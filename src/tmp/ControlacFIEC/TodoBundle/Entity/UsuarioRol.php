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


}

