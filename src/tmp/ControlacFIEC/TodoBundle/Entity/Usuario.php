<?php

namespace ControlacFIEC\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var string
     *
     * @ORM\Column(name="usuario_name", type="string", nullable=true)
     */
    private $usuarioName;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario__apellido", type="string", nullable=true)
     */
    private $usuarioApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_mail", type="string", nullable=true)
     */
    private $usuarioMail;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_user", type="string", nullable=true)
     */
    private $usuarioUser;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_pasword", type="string", nullable=true)
     */
    private $usuarioPasword;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="usuario_user_id_seq", allocationSize=1, initialValue=1)
     */
    private $userId;


}

