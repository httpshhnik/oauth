<?php

class JMSSerializerAdapter_a5dd94b extends \FOS\RestBundle\Serializer\JMSSerializerAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder791ff = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer94627 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7ddea = [
        
    ];

    public function serialize($data, $format, \FOS\RestBundle\Context\Context $context)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'serialize', array('data' => $data, 'format' => $format, 'context' => $context), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->serialize($data, $format, $context);
    }

    public function deserialize($data, $type, $format, \FOS\RestBundle\Context\Context $context)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'deserialize', array('data' => $data, 'type' => $type, 'format' => $format, 'context' => $context), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->deserialize($data, $type, $format, $context);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? $reflection = new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\FOS\RestBundle\Serializer\JMSSerializerAdapter $instance) {
            unset($instance->serializer, $instance->serializationContextFactory, $instance->deserializationContextFactory);
        }, $instance, 'FOS\\RestBundle\\Serializer\\JMSSerializerAdapter')->__invoke($instance);

        $instance->initializer94627 = $initializer;

        return $instance;
    }

    public function __construct(\JMS\Serializer\SerializerInterface $serializer, ?\JMS\Serializer\ContextFactory\SerializationContextFactoryInterface $serializationContextFactory = null, ?\JMS\Serializer\ContextFactory\DeserializationContextFactoryInterface $deserializationContextFactory = null)
    {
        static $reflection;

        if (! $this->valueHolder791ff) {
            $reflection = $reflection ?: new \ReflectionClass('FOS\\RestBundle\\Serializer\\JMSSerializerAdapter');
            $this->valueHolder791ff = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\FOS\RestBundle\Serializer\JMSSerializerAdapter $instance) {
            unset($instance->serializer, $instance->serializationContextFactory, $instance->deserializationContextFactory);
        }, $this, 'FOS\\RestBundle\\Serializer\\JMSSerializerAdapter')->__invoke($this);

        }

        $this->valueHolder791ff->__construct($serializer, $serializationContextFactory, $deserializationContextFactory);
    }

    public function & __get($name)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, '__get', ['name' => $name], $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        if (isset(self::$publicProperties7ddea[$name])) {
            return $this->valueHolder791ff->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder791ff;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder791ff;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder791ff;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder791ff;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, '__isset', array('name' => $name), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder791ff;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder791ff;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, '__unset', array('name' => $name), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder791ff;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder791ff;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, '__clone', array(), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        $this->valueHolder791ff = clone $this->valueHolder791ff;
    }

    public function __sleep()
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, '__sleep', array(), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return array('valueHolder791ff');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\FOS\RestBundle\Serializer\JMSSerializerAdapter $instance) {
            unset($instance->serializer, $instance->serializationContextFactory, $instance->deserializationContextFactory);
        }, $this, 'FOS\\RestBundle\\Serializer\\JMSSerializerAdapter')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer94627 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer94627;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'initializeProxy', array(), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder791ff;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder791ff;
    }


}
