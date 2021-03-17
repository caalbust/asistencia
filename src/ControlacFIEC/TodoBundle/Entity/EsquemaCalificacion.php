<?php

namespace ControlacFIEC\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EsquemaCalificacion
 *
 * @ORM\Table(name="esquema_calificacion")
 * @ORM\Entity
 */
class EsquemaCalificacion
{
    /**
     * @var string
     *
     * @ORM\Column(name="esquema_calificacion_tipo", type="string", nullable=true)
     */
    private $esquemaCalificacionTipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="esquema_calificacion_value", type="integer", nullable=true)
     */
    private $esquemaCalificacionValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="esquema_calificacion_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="esquema_calificacion_esquema_calificacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $esquemaCalificacionId;



    /**
     * Get the value of esquemaCalificacionTipo
     *
     * @return  string
     */ 
    public function getEsquemaCalificacionTipo()
    {
        return $this->esquemaCalificacionTipo;
    }

    /**
     * Set the value of esquemaCalificacionTipo
     *
     * @param  string  $esquemaCalificacionTipo
     *
     * @return  self
     */ 
    public function setEsquemaCalificacionTipo(string $esquemaCalificacionTipo)
    {
        $this->esquemaCalificacionTipo = $esquemaCalificacionTipo;

        return $this;
    }

    /**
     * Get the value of esquemaCalificacionValue
     *
     * @return  integer
     */ 
    public function getEsquemaCalificacionValue()
    {
        return $this->esquemaCalificacionValue;
    }

    /**
     * Set the value of esquemaCalificacionValue
     *
     * @param  integer  $esquemaCalificacionValue
     *
     * @return  self
     */ 
    public function setEsquemaCalificacionValue($esquemaCalificacionValue)
    {
        $this->esquemaCalificacionValue = $esquemaCalificacionValue;

        return $this;
    }

    /**
     * Get the value of esquemaCalificacionId
     *
     * @return  integer
     */ 
    public function getEsquemaCalificacionId()
    {
        return $this->esquemaCalificacionId;
    }

    /**
     * Set the value of esquemaCalificacionId
     *
     * @param  integer  $esquemaCalificacionId
     *
     * @return  self
     */ 
    public function setEsquemaCalificacionId($esquemaCalificacionId)
    {
        $this->esquemaCalificacionId = $esquemaCalificacionId;

        return $this;
    }
}

