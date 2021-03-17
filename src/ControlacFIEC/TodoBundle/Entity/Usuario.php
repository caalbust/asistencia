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



    /**
     * Get the value of usuarioMail
     *
     * @return  string
     */ 
    public function getUsuarioMail()
    {
        return $this->usuarioMail;
    }

    /**
     * Set the value of usuarioMail
     *
     * @param  string  $usuarioMail
     *
     * @return  self
     */ 
    public function setUsuarioMail(string $usuarioMail)
    {
        $this->usuarioMail = $usuarioMail;

        return $this;
    }

    /**
     * Get the value of usuarioName
     *
     * @return  string
     */ 
    public function getUsuarioName()
    {
        return $this->usuarioName;
    }

    /**
     * Set the value of usuarioName
     *
     * @param  string  $usuarioName
     *
     * @return  self
     */ 
    public function setUsuarioName(string $usuarioName)
    {
        $this->usuarioName = $usuarioName;

        return $this;
    }

    /**
     * Get the value of usuarioApellido
     *
     * @return  string
     */ 
    public function getUsuarioApellido()
    {
        return $this->usuarioApellido;
    }

    /**
     * Set the value of usuarioApellido
     *
     * @param  string  $usuarioApellido
     *
     * @return  self
     */ 
    public function setUsuarioApellido(string $usuarioApellido)
    {
        $this->usuarioApellido = $usuarioApellido;

        return $this;
    }

    /**
     * Get the value of usuarioUser
     *
     * @return  string
     */ 
    public function getUsuarioUser()
    {
        return $this->usuarioUser;
    }

    /**
     * Set the value of usuarioUser
     *
     * @param  string  $usuarioUser
     *
     * @return  self
     */ 
    public function setUsuarioUser(string $usuarioUser)
    {
        $this->usuarioUser = $usuarioUser;

        return $this;
    }

    /**
     * Get the value of usuarioPasword
     *
     * @return  string
     */ 
    public function getUsuarioPasword()
    {
        return $this->usuarioPasword;
    }

    /**
     * Set the value of usuarioPasword
     *
     * @param  string  $usuarioPasword
     *
     * @return  self
     */ 
    public function setUsuarioPasword(string $usuarioPasword)
    {
        $this->usuarioPasword = $usuarioPasword;

        return $this;
    }

    /**
     * Get the value of userId
     *
     * @return  integer
     */ 
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     *
     * @param  integer  $userId
     *
     * @return  self
     */ 
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }
}

