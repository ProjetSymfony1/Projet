<?php

namespace ContainerIeAvMI1;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder83a17 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer41817 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties602e5 = [
        
    ];

    public function getConnection()
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'getConnection', array(), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'getMetadataFactory', array(), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'getExpressionBuilder', array(), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'beginTransaction', array(), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'getCache', array(), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->getCache();
    }

    public function transactional($func)
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'transactional', array('func' => $func), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'wrapInTransaction', array('func' => $func), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'commit', array(), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->commit();
    }

    public function rollback()
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'rollback', array(), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'getClassMetadata', array('className' => $className), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'createQuery', array('dql' => $dql), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'createNamedQuery', array('name' => $name), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'createQueryBuilder', array(), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'flush', array('entity' => $entity), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'clear', array('entityName' => $entityName), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->clear($entityName);
    }

    public function close()
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'close', array(), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->close();
    }

    public function persist($entity)
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'persist', array('entity' => $entity), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'remove', array('entity' => $entity), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'refresh', array('entity' => $entity), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'detach', array('entity' => $entity), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'merge', array('entity' => $entity), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'getRepository', array('entityName' => $entityName), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'contains', array('entity' => $entity), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'getEventManager', array(), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'getConfiguration', array(), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'isOpen', array(), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'getUnitOfWork', array(), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'getProxyFactory', array(), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'initializeObject', array('obj' => $obj), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'getFilters', array(), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'isFiltersStateClean', array(), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'hasFilters', array(), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return $this->valueHolder83a17->hasFilters();
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

        $instance->initializer41817 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder83a17) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder83a17 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder83a17->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, '__get', ['name' => $name], $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        if (isset(self::$publicProperties602e5[$name])) {
            return $this->valueHolder83a17->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83a17;

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

        $targetObject = $this->valueHolder83a17;
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
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83a17;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder83a17;
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
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, '__isset', array('name' => $name), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83a17;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder83a17;
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
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, '__unset', array('name' => $name), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83a17;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder83a17;
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
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, '__clone', array(), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        $this->valueHolder83a17 = clone $this->valueHolder83a17;
    }

    public function __sleep()
    {
        $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, '__sleep', array(), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;

        return array('valueHolder83a17');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer41817 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer41817;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer41817 && ($this->initializer41817->__invoke($valueHolder83a17, $this, 'initializeProxy', array(), $this->initializer41817) || 1) && $this->valueHolder83a17 = $valueHolder83a17;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder83a17;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder83a17;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
