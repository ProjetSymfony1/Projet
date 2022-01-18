<?php

namespace ContainerJPK5Q9E;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc002e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer988aa = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6f8f4 = [
        
    ];

    public function getConnection()
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'getConnection', array(), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'getMetadataFactory', array(), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'getExpressionBuilder', array(), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'beginTransaction', array(), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'getCache', array(), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'transactional', array('func' => $func), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'commit', array(), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->commit();
    }

    public function rollback()
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'rollback', array(), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'getClassMetadata', array('className' => $className), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'createQuery', array('dql' => $dql), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'createNamedQuery', array('name' => $name), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'createQueryBuilder', array(), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'flush', array('entity' => $entity), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'clear', array('entityName' => $entityName), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->clear($entityName);
    }

    public function close()
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'close', array(), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->close();
    }

    public function persist($entity)
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'persist', array('entity' => $entity), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'remove', array('entity' => $entity), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'refresh', array('entity' => $entity), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'detach', array('entity' => $entity), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'merge', array('entity' => $entity), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'contains', array('entity' => $entity), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'getEventManager', array(), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'getConfiguration', array(), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'isOpen', array(), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'getUnitOfWork', array(), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'getProxyFactory', array(), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'initializeObject', array('obj' => $obj), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'getFilters', array(), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'isFiltersStateClean', array(), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'hasFilters', array(), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return $this->valueHolderc002e->hasFilters();
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

        $instance->initializer988aa = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc002e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc002e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc002e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, '__get', ['name' => $name], $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        if (isset(self::$publicProperties6f8f4[$name])) {
            return $this->valueHolderc002e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc002e;

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

        $targetObject = $this->valueHolderc002e;
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
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc002e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc002e;
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
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, '__isset', array('name' => $name), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc002e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc002e;
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
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, '__unset', array('name' => $name), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc002e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc002e;
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
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, '__clone', array(), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        $this->valueHolderc002e = clone $this->valueHolderc002e;
    }

    public function __sleep()
    {
        $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, '__sleep', array(), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;

        return array('valueHolderc002e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer988aa = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer988aa;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer988aa && ($this->initializer988aa->__invoke($valueHolderc002e, $this, 'initializeProxy', array(), $this->initializer988aa) || 1) && $this->valueHolderc002e = $valueHolderc002e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc002e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc002e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
