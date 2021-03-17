<?php

namespace ControlacFIEC\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Semestre
 *
 * @ORM\Table(name="semestre")
 * @ORM\Entity
 */
class Semestre
{
    /**
     * @var string
     *
     * @ORM\Column(name="semestre_name", type="string", nullable=true)
     */
    private $semestreName;

    /**
     * @var string
     *
     * @ORM\Column(name="semestre_descripcion", type="string", nullable=true)
     */
    private $semestreDescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="semestre_activo", type="integer", nullable=true)
     */
    private $semestreActivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="semestre_fecha_inicio", type="datetime", nullable=true)
     */
    private $semestreFechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="semestre_fecha_fin", type="datetime", nullable=true)
     */
    private $semestreFechaFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="semestre_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="semestre_semestre_id_seq", allocationSize=1, initialValue=1)
     */
    private $semestreId;


}

