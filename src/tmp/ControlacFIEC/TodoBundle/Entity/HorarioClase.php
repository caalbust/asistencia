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


}

