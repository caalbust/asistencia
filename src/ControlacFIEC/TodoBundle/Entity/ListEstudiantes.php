<?php

namespace ControlacFIEC\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListEstudiantes
 *
 * @ORM\Table(name="list_estudiantes", indexes={@ORM\Index(name="IDX_3CED9CEAFD6E3ECF", columns={"list_estudiante_curso"}), @ORM\Index(name="IDX_3CED9CEAA25E291A", columns={"list_estudiantes_usuario"})})
 * @ORM\Entity
 */
class ListEstudiantes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="list_estudiantes_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="list_estudiantes_list_estudiantes_id_seq", allocationSize=1, initialValue=1)
     */
    private $listEstudiantesId;

    /**
     * @var \ControlacFIEC\TodoBundle\Entity\Curso
     *
     * @ORM\ManyToOne(targetEntity="ControlacFIEC\TodoBundle\Entity\Curso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="list_estudiante_curso", referencedColumnName="curso_id")
     * })
     */
    private $listEstudianteCurso;

    /**
     * @var \ControlacFIEC\TodoBundle\Entity\Estudiantes
     *
     * @ORM\ManyToOne(targetEntity="ControlacFIEC\TodoBundle\Entity\Estudiantes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="list_estudiantes_usuario", referencedColumnName="est_id")
     * })
     */
    private $listEstudiantesUsuario;



    /**
     * Get the value of listEstudiantesId
     *
     * @return  integer
     */ 
    public function getListEstudiantesId()
    {
        return $this->listEstudiantesId;
    }

    /**
     * Set the value of listEstudiantesId
     *
     * @param  integer  $listEstudiantesId
     *
     * @return  self
     */ 
    public function setListEstudiantesId($listEstudiantesId)
    {
        $this->listEstudiantesId = $listEstudiantesId;

        return $this;
    }

    /**
     * Get the value of listEstudianteCurso
     *
     * @return  \ControlacFIEC\TodoBundle\Entity\Curso
     */ 
    public function getListEstudianteCurso()
    {
        return $this->listEstudianteCurso;
    }

    /**
     * Set the value of listEstudianteCurso
     *
     * @param  \ControlacFIEC\TodoBundle\Entity\Curso  $listEstudianteCurso
     *
     * @return  self
     */ 
    public function setListEstudianteCurso(\ControlacFIEC\TodoBundle\Entity\Curso $listEstudianteCurso)
    {
        $this->listEstudianteCurso = $listEstudianteCurso;

        return $this;
    }

    /**
     * Get the value of listEstudiantesUsuario
     *
     * @return  \ControlacFIEC\TodoBundle\Entity\Estudiantes
     */ 
    public function getListEstudiantesUsuario()
    {
        return $this->listEstudiantesUsuario;
    }

    /**
     * Set the value of listEstudiantesUsuario
     *
     * @param  \ControlacFIEC\TodoBundle\Entity\Estudiantes  $listEstudiantesUsuario
     *
     * @return  self
     */ 
    public function setListEstudiantesUsuario(\ControlacFIEC\TodoBundle\Entity\Estudiantes $listEstudiantesUsuario)
    {
        $this->listEstudiantesUsuario = $listEstudiantesUsuario;

        return $this;
    }
}

