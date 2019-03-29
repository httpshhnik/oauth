<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
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

    public function getConnection()
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'getConnection', array(), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'getMetadataFactory', array(), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'getExpressionBuilder', array(), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'beginTransaction', array(), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'getCache', array(), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->getCache();
    }

    public function transactional($func)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'transactional', array('func' => $func), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->transactional($func);
    }

    public function commit()
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'commit', array(), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->commit();
    }

    public function rollback()
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'rollback', array(), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'getClassMetadata', array('className' => $className), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'createQuery', array('dql' => $dql), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'createNamedQuery', array('name' => $name), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'createQueryBuilder', array(), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'flush', array('entity' => $entity), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'clear', array('entityName' => $entityName), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->clear($entityName);
    }

    public function close()
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'close', array(), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->close();
    }

    public function persist($entity)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'persist', array('entity' => $entity), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'remove', array('entity' => $entity), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'refresh', array('entity' => $entity), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'detach', array('entity' => $entity), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'merge', array('entity' => $entity), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'getRepository', array('entityName' => $entityName), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'contains', array('entity' => $entity), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'getEventManager', array(), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'getConfiguration', array(), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'isOpen', array(), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'getUnitOfWork', array(), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'getProxyFactory', array(), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'initializeObject', array('obj' => $obj), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'getFilters', array(), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'isFiltersStateClean', array(), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer94627 && ($this->initializer94627->__invoke($valueHolder791ff, $this, 'hasFilters', array(), $this->initializer94627) || 1) && $this->valueHolder791ff = $valueHolder791ff;

        return $this->valueHolder791ff->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer94627 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder791ff) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder791ff = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder791ff->__construct($conn, $config, $eventManager);
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
