<?php

namespace ControlacFIEC\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materias
 *
 * @ORM\Table(name="materias")
 * @ORM\Entity
 */
class Materias
{
    /**
     * @var string
     *
     * @ORM\Column(name="materias_name", type="string", nullable=true)
     */
    private $materiasName;

    /**
     * @var string
     *
     * @ORM\Column(name="materias_codigo", type="string", nullable=true)
     */
    private $materiasCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="materias_activo", type="integer", nullable=true)
     */
    private $materiasActivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="materias_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="materias_materias_id_seq", allocationSize=1, initialValue=1)
     */
    private $materiasId;



    /**
     * Get the value of materiasName
     *
     * @return  string
     */ 
    public function getMateriasName()
    {
        return $this->materiasName;
    }

    /**
     * Set the value of materiasName
     *
     * @param  string  $materiasName
     *
     * @return  self
     */ 
    public function setMateriasName(string $materiasName)
    {
        $this->materiasName = $materiasName;

        return $this;
    }

    /**
     * Get the value of materiasCodigo
     *
     * @return  string
     */ 
    public function getMateriasCodigo()
    {
        return $this->materiasCodigo;
    }

    /**
     * Set the value of materiasCodigo
     *
     * @param  string  $materiasCodigo
     *
     * @return  self
     */ 
    public function setMateriasCodigo(string $materiasCodigo)
    {
        $this->materiasCodigo = $materiasCodigo;

        return $this;
    }

    /**
     * Get the value of materiasActivo
     *
     * @return  integer
     */ 
    public function getMateriasActivo()
    {
        return $this->materiasActivo;
    }

    /**
     * Set the value of materiasActivo
     *
     * @param  integer  $materiasActivo
     *
     * @return  self
     */ 
    public function setMateriasActivo($materiasActivo)
    {
        $this->materiasActivo = $materiasActivo;

        return $this;
    }

    /**
     * Get the value of materiasId
     *
     * @return  integer
     */ 
    public function getMateriasId()
    {
        return $this->materiasId;
    }

    /**
     * Set the value of materiasId
     *
     * @param  integer  $materiasId
     *
     * @return  self
     */ 
    public function setMateriasId($materiasId)
    {
        $this->materiasId = $materiasId;

        return $this;
    }
}

