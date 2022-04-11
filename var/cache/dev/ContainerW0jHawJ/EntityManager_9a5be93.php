<?php

namespace ContainerW0jHawJ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4bd83 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd6399 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2ec54 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'getConnection', array(), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'getMetadataFactory', array(), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'getExpressionBuilder', array(), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'beginTransaction', array(), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'getCache', array(), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'transactional', array('func' => $func), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'commit', array(), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->commit();
    }

    public function rollback()
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'rollback', array(), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'getClassMetadata', array('className' => $className), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'createQuery', array('dql' => $dql), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'createNamedQuery', array('name' => $name), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'createQueryBuilder', array(), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'flush', array('entity' => $entity), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'clear', array('entityName' => $entityName), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->clear($entityName);
    }

    public function close()
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'close', array(), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->close();
    }

    public function persist($entity)
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'persist', array('entity' => $entity), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'remove', array('entity' => $entity), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'refresh', array('entity' => $entity), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'detach', array('entity' => $entity), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'merge', array('entity' => $entity), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'contains', array('entity' => $entity), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'getEventManager', array(), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'getConfiguration', array(), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'isOpen', array(), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'getUnitOfWork', array(), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'getProxyFactory', array(), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'initializeObject', array('obj' => $obj), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'getFilters', array(), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'isFiltersStateClean', array(), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'hasFilters', array(), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return $this->valueHolder4bd83->hasFilters();
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

        $instance->initializerd6399 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4bd83) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4bd83 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4bd83->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, '__get', ['name' => $name], $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        if (isset(self::$publicProperties2ec54[$name])) {
            return $this->valueHolder4bd83->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4bd83;

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

        $targetObject = $this->valueHolder4bd83;
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
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4bd83;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4bd83;
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
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, '__isset', array('name' => $name), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4bd83;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4bd83;
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
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, '__unset', array('name' => $name), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4bd83;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4bd83;
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
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, '__clone', array(), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        $this->valueHolder4bd83 = clone $this->valueHolder4bd83;
    }

    public function __sleep()
    {
        $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, '__sleep', array(), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;

        return array('valueHolder4bd83');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd6399 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd6399;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd6399 && ($this->initializerd6399->__invoke($valueHolder4bd83, $this, 'initializeProxy', array(), $this->initializerd6399) || 1) && $this->valueHolder4bd83 = $valueHolder4bd83;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4bd83;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4bd83;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
