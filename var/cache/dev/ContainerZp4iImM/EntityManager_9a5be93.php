<?php

namespace ContainerZp4iImM;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7c20a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer82699 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties89de1 = [
        
    ];

    public function getConnection()
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'getConnection', array(), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'getMetadataFactory', array(), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'getExpressionBuilder', array(), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'beginTransaction', array(), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'getCache', array(), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'transactional', array('func' => $func), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'commit', array(), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->commit();
    }

    public function rollback()
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'rollback', array(), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'getClassMetadata', array('className' => $className), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'createQuery', array('dql' => $dql), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'createNamedQuery', array('name' => $name), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'createQueryBuilder', array(), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'flush', array('entity' => $entity), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'clear', array('entityName' => $entityName), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->clear($entityName);
    }

    public function close()
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'close', array(), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->close();
    }

    public function persist($entity)
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'persist', array('entity' => $entity), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'remove', array('entity' => $entity), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'refresh', array('entity' => $entity), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'detach', array('entity' => $entity), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'merge', array('entity' => $entity), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'contains', array('entity' => $entity), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'getEventManager', array(), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'getConfiguration', array(), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'isOpen', array(), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'getUnitOfWork', array(), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'getProxyFactory', array(), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'initializeObject', array('obj' => $obj), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'getFilters', array(), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'isFiltersStateClean', array(), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'hasFilters', array(), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return $this->valueHolder7c20a->hasFilters();
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

        $instance->initializer82699 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7c20a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7c20a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7c20a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, '__get', ['name' => $name], $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        if (isset(self::$publicProperties89de1[$name])) {
            return $this->valueHolder7c20a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c20a;

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

        $targetObject = $this->valueHolder7c20a;
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
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c20a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7c20a;
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
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, '__isset', array('name' => $name), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c20a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7c20a;
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
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, '__unset', array('name' => $name), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c20a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7c20a;
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
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, '__clone', array(), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        $this->valueHolder7c20a = clone $this->valueHolder7c20a;
    }

    public function __sleep()
    {
        $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, '__sleep', array(), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;

        return array('valueHolder7c20a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer82699 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer82699;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer82699 && ($this->initializer82699->__invoke($valueHolder7c20a, $this, 'initializeProxy', array(), $this->initializer82699) || 1) && $this->valueHolder7c20a = $valueHolder7c20a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7c20a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7c20a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
