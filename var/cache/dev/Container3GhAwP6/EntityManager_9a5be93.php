<?php

namespace Container3GhAwP6;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9dab0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere3b18 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa5288 = [
        
    ];

    public function getConnection()
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'getConnection', array(), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'getMetadataFactory', array(), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'getExpressionBuilder', array(), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'beginTransaction', array(), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'getCache', array(), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->getCache();
    }

    public function transactional($func)
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'transactional', array('func' => $func), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'wrapInTransaction', array('func' => $func), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'commit', array(), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->commit();
    }

    public function rollback()
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'rollback', array(), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'getClassMetadata', array('className' => $className), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'createQuery', array('dql' => $dql), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'createNamedQuery', array('name' => $name), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'createQueryBuilder', array(), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'flush', array('entity' => $entity), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'clear', array('entityName' => $entityName), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->clear($entityName);
    }

    public function close()
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'close', array(), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->close();
    }

    public function persist($entity)
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'persist', array('entity' => $entity), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'remove', array('entity' => $entity), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'refresh', array('entity' => $entity), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'detach', array('entity' => $entity), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'merge', array('entity' => $entity), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'getRepository', array('entityName' => $entityName), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'contains', array('entity' => $entity), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'getEventManager', array(), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'getConfiguration', array(), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'isOpen', array(), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'getUnitOfWork', array(), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'getProxyFactory', array(), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'initializeObject', array('obj' => $obj), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'getFilters', array(), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'isFiltersStateClean', array(), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'hasFilters', array(), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return $this->valueHolder9dab0->hasFilters();
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

        $instance->initializere3b18 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9dab0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9dab0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9dab0->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, '__get', ['name' => $name], $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        if (isset(self::$publicPropertiesa5288[$name])) {
            return $this->valueHolder9dab0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9dab0;

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

        $targetObject = $this->valueHolder9dab0;
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
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9dab0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9dab0;
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
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, '__isset', array('name' => $name), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9dab0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9dab0;
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
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, '__unset', array('name' => $name), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9dab0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9dab0;
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
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, '__clone', array(), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        $this->valueHolder9dab0 = clone $this->valueHolder9dab0;
    }

    public function __sleep()
    {
        $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, '__sleep', array(), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;

        return array('valueHolder9dab0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere3b18 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere3b18;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere3b18 && ($this->initializere3b18->__invoke($valueHolder9dab0, $this, 'initializeProxy', array(), $this->initializere3b18) || 1) && $this->valueHolder9dab0 = $valueHolder9dab0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9dab0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9dab0;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
