<?php

namespace ContainerSzOK3ig;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1ffda = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer859fa = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9b565 = [
        
    ];

    public function getConnection()
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'getConnection', array(), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'getMetadataFactory', array(), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'getExpressionBuilder', array(), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'beginTransaction', array(), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'getCache', array(), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->getCache();
    }

    public function transactional($func)
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'transactional', array('func' => $func), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'wrapInTransaction', array('func' => $func), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'commit', array(), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->commit();
    }

    public function rollback()
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'rollback', array(), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'getClassMetadata', array('className' => $className), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'createQuery', array('dql' => $dql), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'createNamedQuery', array('name' => $name), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'createQueryBuilder', array(), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'flush', array('entity' => $entity), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'clear', array('entityName' => $entityName), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->clear($entityName);
    }

    public function close()
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'close', array(), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->close();
    }

    public function persist($entity)
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'persist', array('entity' => $entity), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'remove', array('entity' => $entity), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'refresh', array('entity' => $entity), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'detach', array('entity' => $entity), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'merge', array('entity' => $entity), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'getRepository', array('entityName' => $entityName), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'contains', array('entity' => $entity), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'getEventManager', array(), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'getConfiguration', array(), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'isOpen', array(), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'getUnitOfWork', array(), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'getProxyFactory', array(), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'initializeObject', array('obj' => $obj), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'getFilters', array(), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'isFiltersStateClean', array(), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'hasFilters', array(), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return $this->valueHolder1ffda->hasFilters();
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

        $instance->initializer859fa = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder1ffda) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1ffda = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1ffda->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, '__get', ['name' => $name], $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        if (isset(self::$publicProperties9b565[$name])) {
            return $this->valueHolder1ffda->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ffda;

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

        $targetObject = $this->valueHolder1ffda;
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
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ffda;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1ffda;
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
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, '__isset', array('name' => $name), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ffda;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1ffda;
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
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, '__unset', array('name' => $name), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ffda;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1ffda;
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
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, '__clone', array(), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        $this->valueHolder1ffda = clone $this->valueHolder1ffda;
    }

    public function __sleep()
    {
        $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, '__sleep', array(), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;

        return array('valueHolder1ffda');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer859fa = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer859fa;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer859fa && ($this->initializer859fa->__invoke($valueHolder1ffda, $this, 'initializeProxy', array(), $this->initializer859fa) || 1) && $this->valueHolder1ffda = $valueHolder1ffda;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1ffda;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1ffda;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
