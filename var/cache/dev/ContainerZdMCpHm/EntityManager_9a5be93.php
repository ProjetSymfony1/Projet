<?php

namespace ContainerZdMCpHm;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0ad2d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf6c05 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfc426 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'getConnection', array(), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'getMetadataFactory', array(), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'getExpressionBuilder', array(), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'beginTransaction', array(), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'getCache', array(), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'transactional', array('func' => $func), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'commit', array(), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->commit();
    }

    public function rollback()
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'rollback', array(), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'getClassMetadata', array('className' => $className), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'createQuery', array('dql' => $dql), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'createNamedQuery', array('name' => $name), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'createQueryBuilder', array(), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'flush', array('entity' => $entity), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'clear', array('entityName' => $entityName), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->clear($entityName);
    }

    public function close()
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'close', array(), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->close();
    }

    public function persist($entity)
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'persist', array('entity' => $entity), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'remove', array('entity' => $entity), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'refresh', array('entity' => $entity), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'detach', array('entity' => $entity), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'merge', array('entity' => $entity), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'contains', array('entity' => $entity), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'getEventManager', array(), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'getConfiguration', array(), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'isOpen', array(), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'getUnitOfWork', array(), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'getProxyFactory', array(), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'initializeObject', array('obj' => $obj), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'getFilters', array(), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'isFiltersStateClean', array(), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'hasFilters', array(), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return $this->valueHolder0ad2d->hasFilters();
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

        $instance->initializerf6c05 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0ad2d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0ad2d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0ad2d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, '__get', ['name' => $name], $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        if (isset(self::$publicPropertiesfc426[$name])) {
            return $this->valueHolder0ad2d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0ad2d;

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

        $targetObject = $this->valueHolder0ad2d;
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
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0ad2d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0ad2d;
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
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, '__isset', array('name' => $name), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0ad2d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0ad2d;
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
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, '__unset', array('name' => $name), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0ad2d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0ad2d;
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
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, '__clone', array(), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        $this->valueHolder0ad2d = clone $this->valueHolder0ad2d;
    }

    public function __sleep()
    {
        $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, '__sleep', array(), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;

        return array('valueHolder0ad2d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf6c05 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf6c05;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf6c05 && ($this->initializerf6c05->__invoke($valueHolder0ad2d, $this, 'initializeProxy', array(), $this->initializerf6c05) || 1) && $this->valueHolder0ad2d = $valueHolder0ad2d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0ad2d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0ad2d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
