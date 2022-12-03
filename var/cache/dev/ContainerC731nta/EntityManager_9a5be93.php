<?php

namespace ContainerC731nta;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder36a92 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5fb1c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2bae5 = [
        
    ];

    public function getConnection()
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'getConnection', array(), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'getMetadataFactory', array(), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'getExpressionBuilder', array(), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'beginTransaction', array(), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'getCache', array(), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'transactional', array('func' => $func), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'commit', array(), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->commit();
    }

    public function rollback()
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'rollback', array(), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'getClassMetadata', array('className' => $className), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'createQuery', array('dql' => $dql), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'createNamedQuery', array('name' => $name), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'createQueryBuilder', array(), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'flush', array('entity' => $entity), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'clear', array('entityName' => $entityName), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->clear($entityName);
    }

    public function close()
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'close', array(), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->close();
    }

    public function persist($entity)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'persist', array('entity' => $entity), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'remove', array('entity' => $entity), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'refresh', array('entity' => $entity), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'detach', array('entity' => $entity), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'merge', array('entity' => $entity), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'contains', array('entity' => $entity), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'getEventManager', array(), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'getConfiguration', array(), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'isOpen', array(), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'getUnitOfWork', array(), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'getProxyFactory', array(), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'initializeObject', array('obj' => $obj), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'getFilters', array(), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'isFiltersStateClean', array(), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'hasFilters', array(), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return $this->valueHolder36a92->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer5fb1c = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder36a92) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder36a92 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder36a92->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, '__get', ['name' => $name], $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        if (isset(self::$publicProperties2bae5[$name])) {
            return $this->valueHolder36a92->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36a92;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder36a92;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36a92;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder36a92;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, '__isset', array('name' => $name), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36a92;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder36a92;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, '__unset', array('name' => $name), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36a92;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder36a92;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, '__clone', array(), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        $this->valueHolder36a92 = clone $this->valueHolder36a92;
    }

    public function __sleep()
    {
        $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, '__sleep', array(), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;

        return array('valueHolder36a92');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5fb1c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5fb1c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5fb1c && ($this->initializer5fb1c->__invoke($valueHolder36a92, $this, 'initializeProxy', array(), $this->initializer5fb1c) || 1) && $this->valueHolder36a92 = $valueHolder36a92;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder36a92;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder36a92;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
