<?php

namespace ControlacFIEC\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estudiantes
 *
 * @ORM\Table(name="estudiantes")
 * @ORM\Entity
 */
class Estudiantes
{
    /**
     * @var string
     *
     * @ORM\Column(name="est_name", type="string", nullable=true)
     */
    private $estName;

    /**
     * @var string
     *
     * @ORM\Column(name="est_apellido", type="string", nullable=true)
     */
    private $estApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="est_correo", type="string", nullable=true)
     */
    private $estCorreo;

    /**
     * @var integer
     *
     * @ORM\Column(name="est_activo", type="integer", nullable=true)
     */
    private $estActivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="est_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="estudiantes_est_id_seq", allocationSize=1, initialValue=1)
     */
    private $estId;


}

