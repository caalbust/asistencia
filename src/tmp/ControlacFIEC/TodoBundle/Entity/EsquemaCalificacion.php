<?php

namespace ControlacFIEC\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EsquemaCalificacion
 *
 * @ORM\Table(name="esquema_calificacion")
 * @ORM\Entity
 */
class EsquemaCalificacion
{
    /**
     * @var string
     *
     * @ORM\Column(name="esquema_calificacion_tipo", type="string", nullable=true)
     */
    private $esquemaCalificacionTipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="esquema_calificacion_value", type="integer", nullable=true)
     */
    private $esquemaCalificacionValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="esquema_calificacion_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="esquema_calificacion_esquema_calificacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $esquemaCalificacionId;


}

