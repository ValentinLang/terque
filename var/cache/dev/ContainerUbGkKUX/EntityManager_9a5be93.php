<?php

namespace ContainerUbGkKUX;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere640a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer074c3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties57ccd = [
        
    ];

    public function getConnection()
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'getConnection', array(), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'getMetadataFactory', array(), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'getExpressionBuilder', array(), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'beginTransaction', array(), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'getCache', array(), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'transactional', array('func' => $func), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'commit', array(), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->commit();
    }

    public function rollback()
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'rollback', array(), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'getClassMetadata', array('className' => $className), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'createQuery', array('dql' => $dql), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'createNamedQuery', array('name' => $name), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'createQueryBuilder', array(), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'flush', array('entity' => $entity), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'clear', array('entityName' => $entityName), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->clear($entityName);
    }

    public function close()
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'close', array(), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->close();
    }

    public function persist($entity)
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'persist', array('entity' => $entity), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'remove', array('entity' => $entity), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'refresh', array('entity' => $entity), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'detach', array('entity' => $entity), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'merge', array('entity' => $entity), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'contains', array('entity' => $entity), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'getEventManager', array(), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'getConfiguration', array(), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'isOpen', array(), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'getUnitOfWork', array(), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'getProxyFactory', array(), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'initializeObject', array('obj' => $obj), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'getFilters', array(), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'isFiltersStateClean', array(), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'hasFilters', array(), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return $this->valueHoldere640a->hasFilters();
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

        $instance->initializer074c3 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldere640a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere640a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere640a->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, '__get', ['name' => $name], $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        if (isset(self::$publicProperties57ccd[$name])) {
            return $this->valueHoldere640a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere640a;

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

        $targetObject = $this->valueHoldere640a;
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
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere640a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere640a;
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
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, '__isset', array('name' => $name), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere640a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere640a;
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
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, '__unset', array('name' => $name), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere640a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere640a;
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
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, '__clone', array(), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        $this->valueHoldere640a = clone $this->valueHoldere640a;
    }

    public function __sleep()
    {
        $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, '__sleep', array(), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;

        return array('valueHoldere640a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer074c3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer074c3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer074c3 && ($this->initializer074c3->__invoke($valueHoldere640a, $this, 'initializeProxy', array(), $this->initializer074c3) || 1) && $this->valueHoldere640a = $valueHoldere640a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere640a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere640a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
