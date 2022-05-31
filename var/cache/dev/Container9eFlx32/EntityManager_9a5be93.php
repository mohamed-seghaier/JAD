<?php

namespace Container9eFlx32;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3a9cd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerba176 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertieseefc1 = [
        
    ];

    public function getConnection()
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'getConnection', array(), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'getMetadataFactory', array(), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'getExpressionBuilder', array(), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'beginTransaction', array(), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'getCache', array(), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->getCache();
    }

    public function transactional($func)
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'transactional', array('func' => $func), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'wrapInTransaction', array('func' => $func), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'commit', array(), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->commit();
    }

    public function rollback()
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'rollback', array(), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'getClassMetadata', array('className' => $className), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'createQuery', array('dql' => $dql), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'createNamedQuery', array('name' => $name), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'createQueryBuilder', array(), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'flush', array('entity' => $entity), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'clear', array('entityName' => $entityName), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->clear($entityName);
    }

    public function close()
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'close', array(), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->close();
    }

    public function persist($entity)
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'persist', array('entity' => $entity), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'remove', array('entity' => $entity), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'refresh', array('entity' => $entity), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'detach', array('entity' => $entity), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'merge', array('entity' => $entity), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'getRepository', array('entityName' => $entityName), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'contains', array('entity' => $entity), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'getEventManager', array(), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'getConfiguration', array(), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'isOpen', array(), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'getUnitOfWork', array(), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'getProxyFactory', array(), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'initializeObject', array('obj' => $obj), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'getFilters', array(), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'isFiltersStateClean', array(), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'hasFilters', array(), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return $this->valueHolder3a9cd->hasFilters();
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

        $instance->initializerba176 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3a9cd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3a9cd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3a9cd->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, '__get', ['name' => $name], $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        if (isset(self::$publicPropertieseefc1[$name])) {
            return $this->valueHolder3a9cd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3a9cd;

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

        $targetObject = $this->valueHolder3a9cd;
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
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3a9cd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3a9cd;
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
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, '__isset', array('name' => $name), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3a9cd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3a9cd;
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
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, '__unset', array('name' => $name), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3a9cd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3a9cd;
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
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, '__clone', array(), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        $this->valueHolder3a9cd = clone $this->valueHolder3a9cd;
    }

    public function __sleep()
    {
        $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, '__sleep', array(), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;

        return array('valueHolder3a9cd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerba176 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerba176;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerba176 && ($this->initializerba176->__invoke($valueHolder3a9cd, $this, 'initializeProxy', array(), $this->initializerba176) || 1) && $this->valueHolder3a9cd = $valueHolder3a9cd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3a9cd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3a9cd;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
