<?php

namespace ControlacFIEC\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Curso
 *
 * @ORM\Table(name="curso", indexes={@ORM\Index(name="IDX_CA3B40EC44D4F1BA", columns={"curso_materia"}), @ORM\Index(name="IDX_CA3B40ECD4BB6C9A", columns={"curso_docente"}), @ORM\Index(name="IDX_CA3B40ECB020B6B4", columns={"curso_semestre"})})
 * @ORM\Entity
 */
class Curso
{
    /**
     * @var string
     *
     * @ORM\Column(name="curso_name", type="string", nullable=true)
     */
    private $cursoName;

    /**
     * @var string
     *
     * @ORM\Column(name="curso_codigo", type="string", nullable=true)
     */
    private $cursoCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="curso_paralelo", type="string", nullable=true)
     */
    private $cursoParalelo;

    /**
     * @var integer
     *
     * @ORM\Column(name="curso_cargar_clase", type="integer", nullable=true)
     */
    private $cursoCargarClase;

    /**
     * @var integer
     *
     * @ORM\Column(name="curso_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="curso_curso_id_seq", allocationSize=1, initialValue=1)
     */
    private $cursoId;

    /**
     * @var \ControlacFIEC\TodoBundle\Entity\Materias
     *
     * @ORM\ManyToOne(targetEntity="ControlacFIEC\TodoBundle\Entity\Materias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="curso_materia", referencedColumnName="materias_id")
     * })
     */
    private $cursoMateria;

    /**
     * @var \ControlacFIEC\TodoBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="ControlacFIEC\TodoBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="curso_docente", referencedColumnName="user_id")
     * })
     */
    private $cursoDocente;

    /**
     * @var \ControlacFIEC\TodoBundle\Entity\Semestre
     *
     * @ORM\ManyToOne(targetEntity="ControlacFIEC\TodoBundle\Entity\Semestre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="curso_semestre", referencedColumnName="semestre_id")
     * })
     */
    private $cursoSemestre;


}

