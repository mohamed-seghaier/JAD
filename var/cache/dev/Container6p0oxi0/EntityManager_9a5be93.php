<?php

namespace Container6p0oxi0;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderaa1db = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer64194 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese4548 = [
        
    ];

    public function getConnection()
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'getConnection', array(), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'getMetadataFactory', array(), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'getExpressionBuilder', array(), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'beginTransaction', array(), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'getCache', array(), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->getCache();
    }

    public function transactional($func)
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'transactional', array('func' => $func), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'wrapInTransaction', array('func' => $func), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'commit', array(), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->commit();
    }

    public function rollback()
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'rollback', array(), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'getClassMetadata', array('className' => $className), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'createQuery', array('dql' => $dql), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'createNamedQuery', array('name' => $name), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'createQueryBuilder', array(), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'flush', array('entity' => $entity), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'clear', array('entityName' => $entityName), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->clear($entityName);
    }

    public function close()
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'close', array(), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->close();
    }

    public function persist($entity)
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'persist', array('entity' => $entity), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'remove', array('entity' => $entity), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'refresh', array('entity' => $entity), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'detach', array('entity' => $entity), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'merge', array('entity' => $entity), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'getRepository', array('entityName' => $entityName), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'contains', array('entity' => $entity), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'getEventManager', array(), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'getConfiguration', array(), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'isOpen', array(), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'getUnitOfWork', array(), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'getProxyFactory', array(), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'initializeObject', array('obj' => $obj), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'getFilters', array(), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'isFiltersStateClean', array(), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'hasFilters', array(), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return $this->valueHolderaa1db->hasFilters();
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

        $instance->initializer64194 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderaa1db) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderaa1db = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderaa1db->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, '__get', ['name' => $name], $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        if (isset(self::$publicPropertiese4548[$name])) {
            return $this->valueHolderaa1db->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa1db;

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

        $targetObject = $this->valueHolderaa1db;
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
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa1db;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaa1db;
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
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, '__isset', array('name' => $name), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa1db;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderaa1db;
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
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, '__unset', array('name' => $name), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa1db;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderaa1db;
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
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, '__clone', array(), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        $this->valueHolderaa1db = clone $this->valueHolderaa1db;
    }

    public function __sleep()
    {
        $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, '__sleep', array(), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;

        return array('valueHolderaa1db');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer64194 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer64194;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer64194 && ($this->initializer64194->__invoke($valueHolderaa1db, $this, 'initializeProxy', array(), $this->initializer64194) || 1) && $this->valueHolderaa1db = $valueHolderaa1db;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaa1db;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaa1db;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
