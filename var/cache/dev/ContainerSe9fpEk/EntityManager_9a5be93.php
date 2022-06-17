<?php

namespace ContainerSe9fpEk;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc1410 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer82925 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesad7dd = [
        
    ];

    public function getConnection()
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'getConnection', array(), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'getMetadataFactory', array(), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'getExpressionBuilder', array(), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'beginTransaction', array(), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'getCache', array(), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->getCache();
    }

    public function transactional($func)
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'transactional', array('func' => $func), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'wrapInTransaction', array('func' => $func), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'commit', array(), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->commit();
    }

    public function rollback()
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'rollback', array(), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'getClassMetadata', array('className' => $className), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'createQuery', array('dql' => $dql), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'createNamedQuery', array('name' => $name), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'createQueryBuilder', array(), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'flush', array('entity' => $entity), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'clear', array('entityName' => $entityName), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->clear($entityName);
    }

    public function close()
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'close', array(), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->close();
    }

    public function persist($entity)
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'persist', array('entity' => $entity), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'remove', array('entity' => $entity), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'refresh', array('entity' => $entity), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'detach', array('entity' => $entity), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'merge', array('entity' => $entity), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'getRepository', array('entityName' => $entityName), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'contains', array('entity' => $entity), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'getEventManager', array(), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'getConfiguration', array(), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'isOpen', array(), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'getUnitOfWork', array(), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'getProxyFactory', array(), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'initializeObject', array('obj' => $obj), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'getFilters', array(), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'isFiltersStateClean', array(), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'hasFilters', array(), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return $this->valueHolderc1410->hasFilters();
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

        $instance->initializer82925 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc1410) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc1410 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc1410->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, '__get', ['name' => $name], $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        if (isset(self::$publicPropertiesad7dd[$name])) {
            return $this->valueHolderc1410->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1410;

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

        $targetObject = $this->valueHolderc1410;
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
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1410;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc1410;
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
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, '__isset', array('name' => $name), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1410;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc1410;
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
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, '__unset', array('name' => $name), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1410;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc1410;
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
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, '__clone', array(), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        $this->valueHolderc1410 = clone $this->valueHolderc1410;
    }

    public function __sleep()
    {
        $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, '__sleep', array(), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;

        return array('valueHolderc1410');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer82925 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer82925;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer82925 && ($this->initializer82925->__invoke($valueHolderc1410, $this, 'initializeProxy', array(), $this->initializer82925) || 1) && $this->valueHolderc1410 = $valueHolderc1410;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc1410;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc1410;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
