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


}

