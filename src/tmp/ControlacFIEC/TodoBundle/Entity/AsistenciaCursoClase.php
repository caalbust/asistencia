<?php

namespace ControlacFIEC\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AsistenciaCursoClase
 *
 * @ORM\Table(name="asistencia_curso_clase", indexes={@ORM\Index(name="IDX_686EA2F9A2CFF73E", columns={"asistencia_list_estudiante"}), @ORM\Index(name="IDX_686EA2F9F6AD7FF4", columns={"asistencia_curso"})})
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
     * @ORM\Column(name="asistencia_comentario", type="string", nullable=true)
     */
    private $asistenciaComentario;

    /**
     * @var string
     *
     * @ORM\Column(name="asistencia_tipo", type="string", nullable=true)
     */
    private $asistenciaTipo;

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


}

