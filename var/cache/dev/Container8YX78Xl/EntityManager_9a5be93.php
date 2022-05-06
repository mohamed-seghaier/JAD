<?php

namespace Container8YX78Xl;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera8163 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer91c84 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd4d9c = [
        
    ];

    public function getConnection()
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'getConnection', array(), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'getMetadataFactory', array(), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'getExpressionBuilder', array(), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'beginTransaction', array(), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'getCache', array(), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->getCache();
    }

    public function transactional($func)
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'transactional', array('func' => $func), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'wrapInTransaction', array('func' => $func), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'commit', array(), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->commit();
    }

    public function rollback()
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'rollback', array(), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'getClassMetadata', array('className' => $className), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'createQuery', array('dql' => $dql), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'createNamedQuery', array('name' => $name), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'createQueryBuilder', array(), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'flush', array('entity' => $entity), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'clear', array('entityName' => $entityName), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->clear($entityName);
    }

    public function close()
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'close', array(), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->close();
    }

    public function persist($entity)
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'persist', array('entity' => $entity), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'remove', array('entity' => $entity), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'refresh', array('entity' => $entity), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'detach', array('entity' => $entity), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'merge', array('entity' => $entity), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'getRepository', array('entityName' => $entityName), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'contains', array('entity' => $entity), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'getEventManager', array(), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'getConfiguration', array(), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'isOpen', array(), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'getUnitOfWork', array(), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'getProxyFactory', array(), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'initializeObject', array('obj' => $obj), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'getFilters', array(), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'isFiltersStateClean', array(), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'hasFilters', array(), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return $this->valueHoldera8163->hasFilters();
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

        $instance->initializer91c84 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera8163) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera8163 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera8163->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, '__get', ['name' => $name], $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        if (isset(self::$publicPropertiesd4d9c[$name])) {
            return $this->valueHoldera8163->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera8163;

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

        $targetObject = $this->valueHoldera8163;
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
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera8163;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera8163;
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
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, '__isset', array('name' => $name), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera8163;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera8163;
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
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, '__unset', array('name' => $name), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera8163;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera8163;
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
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, '__clone', array(), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        $this->valueHoldera8163 = clone $this->valueHoldera8163;
    }

    public function __sleep()
    {
        $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, '__sleep', array(), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;

        return array('valueHoldera8163');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer91c84 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer91c84;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer91c84 && ($this->initializer91c84->__invoke($valueHoldera8163, $this, 'initializeProxy', array(), $this->initializer91c84) || 1) && $this->valueHoldera8163 = $valueHoldera8163;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera8163;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera8163;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
