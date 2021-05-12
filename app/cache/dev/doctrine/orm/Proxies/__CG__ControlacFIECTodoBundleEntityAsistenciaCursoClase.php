<?php

namespace Proxies\__CG__\ControlacFIEC\TodoBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class AsistenciaCursoClase extends \ControlacFIEC\TodoBundle\Entity\AsistenciaCursoClase implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'ControlacFIEC\\TodoBundle\\Entity\\AsistenciaCursoClase' . "\0" . 'asistenciaFecha', '' . "\0" . 'ControlacFIEC\\TodoBundle\\Entity\\AsistenciaCursoClase' . "\0" . 'asistenciaValue', '' . "\0" . 'ControlacFIEC\\TodoBundle\\Entity\\AsistenciaCursoClase' . "\0" . 'asistenciaTipo', '' . "\0" . 'ControlacFIEC\\TodoBundle\\Entity\\AsistenciaCursoClase' . "\0" . 'asistenciaComentario', '' . "\0" . 'ControlacFIEC\\TodoBundle\\Entity\\AsistenciaCursoClase' . "\0" . 'asistenciaId', '' . "\0" . 'ControlacFIEC\\TodoBundle\\Entity\\AsistenciaCursoClase' . "\0" . 'asistenciaListEstudiante', '' . "\0" . 'ControlacFIEC\\TodoBundle\\Entity\\AsistenciaCursoClase' . "\0" . 'asistenciaCurso'];
        }

        return ['__isInitialized__', '' . "\0" . 'ControlacFIEC\\TodoBundle\\Entity\\AsistenciaCursoClase' . "\0" . 'asistenciaFecha', '' . "\0" . 'ControlacFIEC\\TodoBundle\\Entity\\AsistenciaCursoClase' . "\0" . 'asistenciaValue', '' . "\0" . 'ControlacFIEC\\TodoBundle\\Entity\\AsistenciaCursoClase' . "\0" . 'asistenciaTipo', '' . "\0" . 'ControlacFIEC\\TodoBundle\\Entity\\AsistenciaCursoClase' . "\0" . 'asistenciaComentario', '' . "\0" . 'ControlacFIEC\\TodoBundle\\Entity\\AsistenciaCursoClase' . "\0" . 'asistenciaId', '' . "\0" . 'ControlacFIEC\\TodoBundle\\Entity\\AsistenciaCursoClase' . "\0" . 'asistenciaListEstudiante', '' . "\0" . 'ControlacFIEC\\TodoBundle\\Entity\\AsistenciaCursoClase' . "\0" . 'asistenciaCurso'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (AsistenciaCursoClase $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getAsistenciaFecha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAsistenciaFecha', []);

        return parent::getAsistenciaFecha();
    }

    /**
     * {@inheritDoc}
     */
    public function setAsistenciaFecha(\DateTime $asistenciaFecha)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAsistenciaFecha', [$asistenciaFecha]);

        return parent::setAsistenciaFecha($asistenciaFecha);
    }

    /**
     * {@inheritDoc}
     */
    public function getAsistenciaValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAsistenciaValue', []);

        return parent::getAsistenciaValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setAsistenciaValue($asistenciaValue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAsistenciaValue', [$asistenciaValue]);

        return parent::setAsistenciaValue($asistenciaValue);
    }

    /**
     * {@inheritDoc}
     */
    public function getAsistenciaComentario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAsistenciaComentario', []);

        return parent::getAsistenciaComentario();
    }

    /**
     * {@inheritDoc}
     */
    public function setAsistenciaComentario(string $asistenciaComentario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAsistenciaComentario', [$asistenciaComentario]);

        return parent::setAsistenciaComentario($asistenciaComentario);
    }

    /**
     * {@inheritDoc}
     */
    public function getAsistenciaId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getAsistenciaId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAsistenciaId', []);

        return parent::getAsistenciaId();
    }

    /**
     * {@inheritDoc}
     */
    public function setAsistenciaId($asistenciaId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAsistenciaId', [$asistenciaId]);

        return parent::setAsistenciaId($asistenciaId);
    }

    /**
     * {@inheritDoc}
     */
    public function getAsistenciaListEstudiante()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAsistenciaListEstudiante', []);

        return parent::getAsistenciaListEstudiante();
    }

    /**
     * {@inheritDoc}
     */
    public function setAsistenciaListEstudiante(\ControlacFIEC\TodoBundle\Entity\ListEstudiantes $asistenciaListEstudiante)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAsistenciaListEstudiante', [$asistenciaListEstudiante]);

        return parent::setAsistenciaListEstudiante($asistenciaListEstudiante);
    }

    /**
     * {@inheritDoc}
     */
    public function getAsistenciaTipo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAsistenciaTipo', []);

        return parent::getAsistenciaTipo();
    }

    /**
     * {@inheritDoc}
     */
    public function setAsistenciaTipo(string $asistenciaTipo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAsistenciaTipo', [$asistenciaTipo]);

        return parent::setAsistenciaTipo($asistenciaTipo);
    }

    /**
     * {@inheritDoc}
     */
    public function getAsistenciaCurso()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAsistenciaCurso', []);

        return parent::getAsistenciaCurso();
    }

    /**
     * {@inheritDoc}
     */
    public function setAsistenciaCurso(\ControlacFIEC\TodoBundle\Entity\Curso $asistenciaCurso)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAsistenciaCurso', [$asistenciaCurso]);

        return parent::setAsistenciaCurso($asistenciaCurso);
    }

}
