<?php

namespace ControlacFIEC\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HorarioClase
 *
 * @ORM\Table(name="horario_clase", indexes={@ORM\Index(name="IDX_D743B58A2668C8CC", columns={"horario_clase_curso"})})
 * @ORM\Entity
 */
class HorarioClase
{
    /**
     * @var integer
     *
     * @ORM\Column(name="horario_clase_dia_num", type="integer", nullable=true)
     */
    private $horarioClaseDiaNum;

    /**
     * @var string
     *
     * @ORM\Column(name="horario_clase_name", type="string", nullable=true)
     */
    private $horarioClaseName;
 /**
     * @var \DateTime
     *
     * @ORM\Column(name="horario_clase_time_inicio", type="time", nullable=true)
     */
    private $horarioClaseTimeInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horario_clase_time_fin", type="time", nullable=true)
     */
    private $horarioClaseTimeFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="horario_clase_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="horario_clase_horario_clase_id_seq", allocationSize=1, initialValue=1)
     */
    private $horarioClaseId;

    /**
     * @var \ControlacFIEC\TodoBundle\Entity\Curso
     *
     * @ORM\ManyToOne(targetEntity="ControlacFIEC\TodoBundle\Entity\Curso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="horario_clase_curso", referencedColumnName="curso_id")
     * })
     */
    private $horarioClaseCurso;



    /**
     * Get the value of horarioClaseDiaNum
     *
     * @return  integer
     */ 
    public function getHorarioClaseDiaNum()
    {
        return $this->horarioClaseDiaNum;
    }

    /**
     * Set the value of horarioClaseDiaNum
     *
     * @param  integer  $horarioClaseDiaNum
     *
     * @return  self
     */ 
    public function setHorarioClaseDiaNum($horarioClaseDiaNum)
    {
        $this->horarioClaseDiaNum = $horarioClaseDiaNum;

        return $this;
    }

    /**
     * Get the value of horarioClaseName
     *
     * @return  string
     */ 
    public function getHorarioClaseName()
    {
        return $this->horarioClaseName;
    }

    /**
     * Set the value of horarioClaseName
     *
     * @param  string  $horarioClaseName
     *
     * @return  self
     */ 
    public function setHorarioClaseName(string $horarioClaseName)
    {
        $this->horarioClaseName = $horarioClaseName;

        return $this;
    }


    /**
     * Get the value of horarioClaseId
     *
     * @return  integer
     */ 
    public function getHorarioClaseId()
    {
        return $this->horarioClaseId;
    }

    /**
     * Set the value of horarioClaseId
     *
     * @param  integer  $horarioClaseId
     *
     * @return  self
     */ 
    public function setHorarioClaseId($horarioClaseId)
    {
        $this->horarioClaseId = $horarioClaseId;

        return $this;
    }

    /**
     * Get the value of horarioClaseCurso
     *
     * @return  \ControlacFIEC\TodoBundle\Entity\Curso
     */ 
    public function getHorarioClaseCurso()
    {
        return $this->horarioClaseCurso;
    }

    /**
     * Set the value of horarioClaseCurso
     *
     * @param  \ControlacFIEC\TodoBundle\Entity\Curso  $horarioClaseCurso
     *
     * @return  self
     */ 
    public function setHorarioClaseCurso(\ControlacFIEC\TodoBundle\Entity\Curso $horarioClaseCurso)
    {
        $this->horarioClaseCurso = $horarioClaseCurso;

        return $this;
    }

    /**
     * Get the value of horarioClaseTimeInicio
     *
     * @return  \DateTime
     */ 
    public function getHorarioClaseTimeInicio()
    {
        return $this->horarioClaseTimeInicio;
    }

    /**
     * Set the value of horarioClaseTimeInicio
     *
     * @param  \DateTime  $horarioClaseTimeInicio
     *
     * @return  self
     */ 
    public function setHorarioClaseTimeInicio(\DateTime $horarioClaseTimeInicio)
    {
        $this->horarioClaseTimeInicio = $horarioClaseTimeInicio;

        return $this;
    }

    /**
     * Get the value of horarioClaseTimeFin
     *
     * @return  \DateTime
     */ 
    public function getHorarioClaseTimeFin()
    {
        return $this->horarioClaseTimeFin;
    }

    /**
     * Set the value of horarioClaseTimeFin
     *
     * @param  \DateTime  $horarioClaseTimeFin
     *
     * @return  self
     */ 
    public function setHorarioClaseTimeFin(\DateTime $horarioClaseTimeFin)
    {
        $this->horarioClaseTimeFin = $horarioClaseTimeFin;

        return $this;
    }
}

