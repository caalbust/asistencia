<?php

namespace ControlacFIEC\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estudiantes
 *
 * @ORM\Table(name="estudiantes")
 * @ORM\Entity
 */
class Estudiantes
{
    /**
     * @var string
     *
     * @ORM\Column(name="est_name", type="string", nullable=true)
     */
    private $estName;

    /**
     * @var string
     *
     * @ORM\Column(name="est_apellido", type="string", nullable=true)
     */
    private $estApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="est_correo", type="string", nullable=true)
     */
    private $estCorreo;

    /**
     * @var integer
     *
     * @ORM\Column(name="est_activo", type="integer", nullable=true)
     */
    private $estActivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="est_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="estudiantes_est_id_seq", allocationSize=1, initialValue=1)
     */
    private $estId;



    /**
     * Get the value of estName
     *
     * @return  string
     */ 
    public function getEstName()
    {
        return $this->estName;
    }

    /**
     * Set the value of estName
     *
     * @param  string  $estName
     *
     * @return  self
     */ 
    public function setEstName(string $estName)
    {
        $this->estName = $estName;

        return $this;
    }

    /**
     * Get the value of estApellido
     *
     * @return  string
     */ 
    public function getEstApellido()
    {
        return $this->estApellido;
    }

    /**
     * Set the value of estApellido
     *
     * @param  string  $estApellido
     *
     * @return  self
     */ 
    public function setEstApellido(string $estApellido)
    {
        $this->estApellido = $estApellido;

        return $this;
    }

    /**
     * Get the value of estCorreo
     *
     * @return  string
     */ 
    public function getEstCorreo()
    {
        return $this->estCorreo;
    }

    /**
     * Set the value of estCorreo
     *
     * @param  string  $estCorreo
     *
     * @return  self
     */ 
    public function setEstCorreo(string $estCorreo)
    {
        $this->estCorreo = $estCorreo;

        return $this;
    }

    /**
     * Get the value of estActivo
     *
     * @return  integer
     */ 
    public function getEstActivo()
    {
        return $this->estActivo;
    }

    /**
     * Set the value of estActivo
     *
     * @param  integer  $estActivo
     *
     * @return  self
     */ 
    public function setEstActivo($estActivo)
    {
        $this->estActivo = $estActivo;

        return $this;
    }

    /**
     * Get the value of estId
     *
     * @return  integer
     */ 
    public function getEstId()
    {
        return $this->estId;
    }

    /**
     * Set the value of estId
     *
     * @param  integer  $estId
     *
     * @return  self
     */ 
    public function setEstId($estId)
    {
        $this->estId = $estId;

        return $this;
    }
}

