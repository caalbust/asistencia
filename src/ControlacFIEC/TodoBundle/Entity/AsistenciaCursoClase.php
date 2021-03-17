<?php

namespace ControlacFIEC\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AsistenciaCursoClase
 *
 * @ORM\Table(name="asistencia_curso_clase", indexes={@ORM\Index(name="IDX_686EA2F9A2CFF73E", columns={"asistencia_list_estudiante"})})
 * @ORM\Entity
 */
class AsistenciaCursoClase
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="asistencia_fecha", type="datetime", nullable=true)
     */
    private $asistenciaFecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="asistencia_value", type="integer", nullable=true)
     */
    private $asistenciaValue;
 /**
     * @var string
     *
     * @ORM\Column(name="asistencia_tipo", type="string", nullable=true)
     */
    private $asistenciaTipo;
    /**
     * @var string
     *
     * @ORM\Column(name="asistencia_comentario", type="string", nullable=true)
     */
    private $asistenciaComentario;

    /**
     * @var integer
     *
     * @ORM\Column(name="asistencia_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="asistencia_curso_clase_asistencia_id_seq", allocationSize=1, initialValue=1)
     */
    private $asistenciaId;

    /**
     * @var \ControlacFIEC\TodoBundle\Entity\ListEstudiantes
     *
     * @ORM\ManyToOne(targetEntity="ControlacFIEC\TodoBundle\Entity\ListEstudiantes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="asistencia_list_estudiante", referencedColumnName="list_estudiantes_id")
     * })
     */
    private $asistenciaListEstudiante;

/**
     * @var \ControlacFIEC\TodoBundle\Entity\Curso
     *
     * @ORM\ManyToOne(targetEntity="ControlacFIEC\TodoBundle\Entity\Curso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="asistencia_curso", referencedColumnName="curso_id")
     * })
     */
    private $asistenciaCurso;

    /**
     * Get the value of asistenciaFecha
     *
     * @return  \DateTime
     */ 
    public function getAsistenciaFecha()
    {
        return $this->asistenciaFecha;
    }

    /**
     * Set the value of asistenciaFecha
     *
     * @param  \DateTime  $asistenciaFecha
     *
     * @return  self
     */ 
    public function setAsistenciaFecha(\DateTime $asistenciaFecha)
    {
        $this->asistenciaFecha = $asistenciaFecha;

        return $this;
    }

    /**
     * Get the value of asistenciaValue
     *
     * @return  integer
     */ 
    public function getAsistenciaValue()
    {
        return $this->asistenciaValue;
    }

    /**
     * Set the value of asistenciaValue
     *
     * @param  integer  $asistenciaValue
     *
     * @return  self
     */ 
    public function setAsistenciaValue($asistenciaValue)
    {
        $this->asistenciaValue = $asistenciaValue;

        return $this;
    }

    /**
     * Get the value of asistenciaComentario
     *
     * @return  string
     */ 
    public function getAsistenciaComentario()
    {
        return $this->asistenciaComentario;
    }

    /**
     * Set the value of asistenciaComentario
     *
     * @param  string  $asistenciaComentario
     *
     * @return  self
     */ 
    public function setAsistenciaComentario(string $asistenciaComentario)
    {
        $this->asistenciaComentario = $asistenciaComentario;

        return $this;
    }

    /**
     * Get the value of asistenciaId
     *
     * @return  integer
     */ 
    public function getAsistenciaId()
    {
        return $this->asistenciaId;
    }

    /**
     * Set the value of asistenciaId
     *
     * @param  integer  $asistenciaId
     *
     * @return  self
     */ 
    public function setAsistenciaId($asistenciaId)
    {
        $this->asistenciaId = $asistenciaId;

        return $this;
    }

    /**
     * Get the value of asistenciaListEstudiante
     *
     * @return  \ControlacFIEC\TodoBundle\Entity\ListEstudiantes
     */ 
    public function getAsistenciaListEstudiante()
    {
        return $this->asistenciaListEstudiante;
    }

    /**
     * Set the value of asistenciaListEstudiante
     *
     * @param  \ControlacFIEC\TodoBundle\Entity\ListEstudiantes  $asistenciaListEstudiante
     *
     * @return  self
     */ 
    public function setAsistenciaListEstudiante(\ControlacFIEC\TodoBundle\Entity\ListEstudiantes $asistenciaListEstudiante)
    {
        $this->asistenciaListEstudiante = $asistenciaListEstudiante;

        return $this;
    }

    /**
     * Get the value of asistenciaTipo
     *
     * @return  string
     */ 
    public function getAsistenciaTipo()
    {
        return $this->asistenciaTipo;
    }

    /**
     * Set the value of asistenciaTipo
     *
     * @param  string  $asistenciaTipo
     *
     * @return  self
     */ 
    public function setAsistenciaTipo(string $asistenciaTipo)
    {
        $this->asistenciaTipo = $asistenciaTipo;

        return $this;
    }

    /**
     * Get the value of asistenciaCurso
     *
     * @return  \ControlacFIEC\TodoBundle\Entity\Curso
     */ 
    public function getAsistenciaCurso()
    {
        return $this->asistenciaCurso;
    }

    /**
     * Set the value of asistenciaCurso
     *
     * @param  \ControlacFIEC\TodoBundle\Entity\Curso  $asistenciaCurso
     *
     * @return  self
     */ 
    public function setAsistenciaCurso(\ControlacFIEC\TodoBundle\Entity\Curso $asistenciaCurso)
    {
        $this->asistenciaCurso = $asistenciaCurso;

        return $this;
    }
}

