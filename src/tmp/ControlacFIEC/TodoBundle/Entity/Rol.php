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


}

