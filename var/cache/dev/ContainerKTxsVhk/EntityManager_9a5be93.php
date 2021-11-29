<?php

namespace ContainerKTxsVhk;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder01475 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer711fb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd2244 = [
        
    ];

    public function getConnection()
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'getConnection', array(), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'getMetadataFactory', array(), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'getExpressionBuilder', array(), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'beginTransaction', array(), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'getCache', array(), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->getCache();
    }

    public function transactional($func)
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'transactional', array('func' => $func), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'wrapInTransaction', array('func' => $func), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'commit', array(), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->commit();
    }

    public function rollback()
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'rollback', array(), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'getClassMetadata', array('className' => $className), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'createQuery', array('dql' => $dql), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'createNamedQuery', array('name' => $name), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'createQueryBuilder', array(), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'flush', array('entity' => $entity), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'clear', array('entityName' => $entityName), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->clear($entityName);
    }

    public function close()
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'close', array(), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->close();
    }

    public function persist($entity)
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'persist', array('entity' => $entity), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'remove', array('entity' => $entity), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'refresh', array('entity' => $entity), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'detach', array('entity' => $entity), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'merge', array('entity' => $entity), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'getRepository', array('entityName' => $entityName), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'contains', array('entity' => $entity), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'getEventManager', array(), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'getConfiguration', array(), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'isOpen', array(), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'getUnitOfWork', array(), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'getProxyFactory', array(), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'initializeObject', array('obj' => $obj), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'getFilters', array(), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'isFiltersStateClean', array(), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'hasFilters', array(), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return $this->valueHolder01475->hasFilters();
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

        $instance->initializer711fb = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder01475) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder01475 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder01475->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, '__get', ['name' => $name], $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        if (isset(self::$publicPropertiesd2244[$name])) {
            return $this->valueHolder01475->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01475;

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

        $targetObject = $this->valueHolder01475;
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
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01475;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder01475;
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
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, '__isset', array('name' => $name), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01475;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder01475;
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
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, '__unset', array('name' => $name), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01475;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder01475;
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
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, '__clone', array(), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        $this->valueHolder01475 = clone $this->valueHolder01475;
    }

    public function __sleep()
    {
        $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, '__sleep', array(), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;

        return array('valueHolder01475');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer711fb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer711fb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer711fb && ($this->initializer711fb->__invoke($valueHolder01475, $this, 'initializeProxy', array(), $this->initializer711fb) || 1) && $this->valueHolder01475 = $valueHolder01475;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder01475;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder01475;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
