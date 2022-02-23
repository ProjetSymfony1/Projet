<?php

namespace ContainerX63yLEH;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder672bf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdc1a8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5d452 = [
        
    ];

    public function getConnection()
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'getConnection', array(), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'getMetadataFactory', array(), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'getExpressionBuilder', array(), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'beginTransaction', array(), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'getCache', array(), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'transactional', array('func' => $func), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'commit', array(), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->commit();
    }

    public function rollback()
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'rollback', array(), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'getClassMetadata', array('className' => $className), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'createQuery', array('dql' => $dql), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'createNamedQuery', array('name' => $name), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'createQueryBuilder', array(), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'flush', array('entity' => $entity), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'clear', array('entityName' => $entityName), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->clear($entityName);
    }

    public function close()
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'close', array(), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->close();
    }

    public function persist($entity)
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'persist', array('entity' => $entity), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'remove', array('entity' => $entity), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'refresh', array('entity' => $entity), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'detach', array('entity' => $entity), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'merge', array('entity' => $entity), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'contains', array('entity' => $entity), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'getEventManager', array(), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'getConfiguration', array(), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'isOpen', array(), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'getUnitOfWork', array(), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'getProxyFactory', array(), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'initializeObject', array('obj' => $obj), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'getFilters', array(), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'isFiltersStateClean', array(), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'hasFilters', array(), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return $this->valueHolder672bf->hasFilters();
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

        $instance->initializerdc1a8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder672bf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder672bf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder672bf->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, '__get', ['name' => $name], $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        if (isset(self::$publicProperties5d452[$name])) {
            return $this->valueHolder672bf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder672bf;

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

        $targetObject = $this->valueHolder672bf;
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
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder672bf;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder672bf;
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
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, '__isset', array('name' => $name), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder672bf;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder672bf;
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
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, '__unset', array('name' => $name), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder672bf;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder672bf;
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
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, '__clone', array(), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        $this->valueHolder672bf = clone $this->valueHolder672bf;
    }

    public function __sleep()
    {
        $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, '__sleep', array(), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;

        return array('valueHolder672bf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdc1a8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdc1a8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdc1a8 && ($this->initializerdc1a8->__invoke($valueHolder672bf, $this, 'initializeProxy', array(), $this->initializerdc1a8) || 1) && $this->valueHolder672bf = $valueHolder672bf;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder672bf;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder672bf;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
