<?php

namespace ControlacFIEC\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Semestre
 *
 * @ORM\Table(name="semestre")
 * @ORM\Entity
 */
class Semestre
{
    /**
     * @var string
     *
     * @ORM\Column(name="semestre_name", type="string", nullable=true)
     */
    private $semestreName;

    /**
     * @var string
     *
     * @ORM\Column(name="semestre_descripcion", type="string", nullable=true)
     */
    private $semestreDescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="semestre_activo", type="integer", nullable=true)
     */
    private $semestreActivo;

   /**
     * @var \DateTime
     *
     * @ORM\Column(name="semestre_fecha_inicio", type="datetime", nullable=true)
     */
    private $semestreFechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="semestre_fecha_fin", type="datetime", nullable=true)
     */
    private $semestreFechaFin;


    /**
     * @var integer
     *
     * @ORM\Column(name="semestre_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="semestre_semestre_id_seq", allocationSize=1, initialValue=1)
     */
    private $semestreId;



    /**
     * Get the value of semestreName
     *
     * @return  string
     */ 
    public function getSemestreName()
    {
        return $this->semestreName;
    }

    /**
     * Set the value of semestreName
     *
     * @param  string  $semestreName
     *
     * @return  self
     */ 
    public function setSemestreName(string $semestreName)
    {
        $this->semestreName = $semestreName;

        return $this;
    }

    /**
     * Get the value of semestreDescripcion
     *
     * @return  string
     */ 
    public function getSemestreDescripcion()
    {
        return $this->semestreDescripcion;
    }

    /**
     * Set the value of semestreDescripcion
     *
     * @param  string  $semestreDescripcion
     *
     * @return  self
     */ 
    public function setSemestreDescripcion(string $semestreDescripcion)
    {
        $this->semestreDescripcion = $semestreDescripcion;

        return $this;
    }

    /**
     * Get the value of semestreActivo
     *
     * @return  integer
     */ 
    public function getSemestreActivo()
    {
        return $this->semestreActivo;
    }

    /**
     * Set the value of semestreActivo
     *
     * @param  integer  $semestreActivo
     *
     * @return  self
     */ 
    public function setSemestreActivo($semestreActivo)
    {
        $this->semestreActivo = $semestreActivo;

        return $this;
    }

   

    /**
     * Get the value of semestreId
     *
     * @return  integer
     */ 
    public function getSemestreId()
    {
        return $this->semestreId;
    }

    /**
     * Set the value of semestreId
     *
     * @param  integer  $semestreId
     *
     * @return  self
     */ 
    public function setSemestreId($semestreId)
    {
        $this->semestreId = $semestreId;

        return $this;
    }

    /**
     * Get the value of semestreFechaInicio
     *
     * @return  \DateTime
     */ 
    public function getSemestreFechaInicio()
    {
        return $this->semestreFechaInicio;
    }

    /**
     * Set the value of semestreFechaInicio
     *
     * @param  \DateTime  $semestreFechaInicio
     *
     * @return  self
     */ 
    public function setSemestreFechaInicio(\DateTime $semestreFechaInicio)
    {
        $this->semestreFechaInicio = $semestreFechaInicio;

        return $this;
    }

    /**
     * Get the value of semestreFechaFin
     *
     * @return  \DateTime
     */ 
    public function getSemestreFechaFin()
    {
        return $this->semestreFechaFin;
    }

    /**
     * Set the value of semestreFechaFin
     *
     * @param  \DateTime  $semestreFechaFin
     *
     * @return  self
     */ 
    public function setSemestreFechaFin(\DateTime $semestreFechaFin)
    {
        $this->semestreFechaFin = $semestreFechaFin;

        return $this;
    }
}

