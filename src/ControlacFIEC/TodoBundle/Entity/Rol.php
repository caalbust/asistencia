<?php

namespace ControlacFIEC\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rol
 *
 * @ORM\Table(name="rol")
 * @ORM\Entity
 */
class Rol
{
    /**
     * @var string
     *
     * @ORM\Column(name="rol_name", type="string", nullable=true)
     */
    private $rolName;

    /**
     * @var integer
     *
     * @ORM\Column(name="rol_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rol_rol_id_seq", allocationSize=1, initialValue=1)
     */
    private $rolId;



    /**
     * Get the value of rolName
     *
     * @return  string
     */ 
    public function getRolName()
    {
        return $this->rolName;
    }

    /**
     * Set the value of rolName
     *
     * @param  string  $rolName
     *
     * @return  self
     */ 
    public function setRolName(string $rolName)
    {
        $this->rolName = $rolName;

        return $this;
    }

    /**
     * Get the value of rolId
     *
     * @return  integer
     */ 
    public function getRolId()
    {
        return $this->rolId;
    }

    /**
     * Set the value of rolId
     *
     * @param  integer  $rolId
     *
     * @return  self
     */ 
    public function setRolId($rolId)
    {
        $this->rolId = $rolId;

        return $this;
    }
}

