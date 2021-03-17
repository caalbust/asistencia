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



    /**
     * Get the value of cursoName
     *
     * @return  string
     */ 
    public function getCursoName()
    {
        return $this->cursoName;
    }

    /**
     * Set the value of cursoName
     *
     * @param  string  $cursoName
     *
     * @return  self
     */ 
    public function setCursoName(string $cursoName)
    {
        $this->cursoName = $cursoName;

        return $this;
    }

    /**
     * Get the value of cursoCodigo
     *
     * @return  string
     */ 
    public function getCursoCodigo()
    {
        return $this->cursoCodigo;
    }

    /**
     * Set the value of cursoCodigo
     *
     * @param  string  $cursoCodigo
     *
     * @return  self
     */ 
    public function setCursoCodigo(string $cursoCodigo)
    {
        $this->cursoCodigo = $cursoCodigo;

        return $this;
    }
    /**
     * @var integer
     *
     * @ORM\Column(name="curso_cargar_clase", type="integer", nullable=true)
     */
    private $cursoCargarClase;
    /**
     * Get the value of cursoParalelo
     *
     * @return  string
     */ 
    public function getCursoParalelo()
    {
        return $this->cursoParalelo;
    }

    /**
     * Set the value of cursoParalelo
     *
     * @param  string  $cursoParalelo
     *
     * @return  self
     */ 
    public function setCursoParalelo(string $cursoParalelo)
    {
        $this->cursoParalelo = $cursoParalelo;

        return $this;
    }

    /**
     * Get the value of cursoId
     *
     * @return  integer
     */ 
    public function getCursoId()
    {
        return $this->cursoId;
    }

    /**
     * Set the value of cursoId
     *
     * @param  integer  $cursoId
     *
     * @return  self
     */ 
    public function setCursoId($cursoId)
    {
        $this->cursoId = $cursoId;

        return $this;
    }

    /**
     * Get the value of cursoMateria
     *
     * @return  \ControlacFIEC\TodoBundle\Entity\Materias
     */ 
    public function getCursoMateria()
    {
        return $this->cursoMateria;
    }

    /**
     * Set the value of cursoMateria
     *
     * @param  \ControlacFIEC\TodoBundle\Entity\Materias  $cursoMateria
     *
     * @return  self
     */ 
    public function setCursoMateria(\ControlacFIEC\TodoBundle\Entity\Materias $cursoMateria)
    {
        $this->cursoMateria = $cursoMateria;

        return $this;
    }

    /**
     * Get the value of cursoDocente
     *
     * @return  \ControlacFIEC\TodoBundle\Entity\Usuario
     */ 
    public function getCursoDocente()
    {
        return $this->cursoDocente;
    }

    /**
     * Set the value of cursoDocente
     *
     * @param  \ControlacFIEC\TodoBundle\Entity\Usuario  $cursoDocente
     *
     * @return  self
     */ 
    public function setCursoDocente(\ControlacFIEC\TodoBundle\Entity\Usuario $cursoDocente)
    {
        $this->cursoDocente = $cursoDocente;

        return $this;
    }

    /**
     * Get the value of cursoSemestre
     *
     * @return  \ControlacFIEC\TodoBundle\Entity\Semestre
     */ 
    public function getCursoSemestre()
    {
        return $this->cursoSemestre;
    }

    /**
     * Set the value of cursoSemestre
     *
     * @param  \ControlacFIEC\TodoBundle\Entity\Semestre  $cursoSemestre
     *
     * @return  self
     */ 
    public function setCursoSemestre(\ControlacFIEC\TodoBundle\Entity\Semestre $cursoSemestre)
    {
        $this->cursoSemestre = $cursoSemestre;

        return $this;
    }

    /**
     * Get the value of cursoCargarClase
     *
     * @return  integer
     */ 
    public function getCursoCargarClase()
    {
        return $this->cursoCargarClase;
    }

    /**
     * Set the value of cursoCargarClase
     *
     * @param  integer  $cursoCargarClase
     *
     * @return  self
     */ 
    public function setCursoCargarClase($cursoCargarClase)
    {
        $this->cursoCargarClase = $cursoCargarClase;

        return $this;
    }
}

