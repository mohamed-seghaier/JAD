<?php

namespace ContainerNfRXxBx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder70e17 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc09b8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties60c0e = [
        
    ];

    public function getConnection()
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'getConnection', array(), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'getMetadataFactory', array(), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'getExpressionBuilder', array(), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'beginTransaction', array(), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'getCache', array(), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'transactional', array('func' => $func), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'commit', array(), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->commit();
    }

    public function rollback()
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'rollback', array(), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'getClassMetadata', array('className' => $className), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'createQuery', array('dql' => $dql), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'createNamedQuery', array('name' => $name), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'createQueryBuilder', array(), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'flush', array('entity' => $entity), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'clear', array('entityName' => $entityName), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->clear($entityName);
    }

    public function close()
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'close', array(), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->close();
    }

    public function persist($entity)
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'persist', array('entity' => $entity), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'remove', array('entity' => $entity), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'refresh', array('entity' => $entity), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'detach', array('entity' => $entity), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'merge', array('entity' => $entity), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'contains', array('entity' => $entity), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'getEventManager', array(), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'getConfiguration', array(), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'isOpen', array(), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'getUnitOfWork', array(), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'getProxyFactory', array(), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'initializeObject', array('obj' => $obj), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'getFilters', array(), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'isFiltersStateClean', array(), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'hasFilters', array(), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return $this->valueHolder70e17->hasFilters();
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

        $instance->initializerc09b8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder70e17) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder70e17 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder70e17->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, '__get', ['name' => $name], $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        if (isset(self::$publicProperties60c0e[$name])) {
            return $this->valueHolder70e17->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70e17;

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

        $targetObject = $this->valueHolder70e17;
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
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70e17;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder70e17;
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
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, '__isset', array('name' => $name), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70e17;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder70e17;
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
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, '__unset', array('name' => $name), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70e17;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder70e17;
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
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, '__clone', array(), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        $this->valueHolder70e17 = clone $this->valueHolder70e17;
    }

    public function __sleep()
    {
        $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, '__sleep', array(), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;

        return array('valueHolder70e17');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc09b8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc09b8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc09b8 && ($this->initializerc09b8->__invoke($valueHolder70e17, $this, 'initializeProxy', array(), $this->initializerc09b8) || 1) && $this->valueHolder70e17 = $valueHolder70e17;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder70e17;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder70e17;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
