<?php

namespace Container2Fj4s3M;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8c4cd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4dc68 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties590b6 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'getConnection', array(), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'getMetadataFactory', array(), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'getExpressionBuilder', array(), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'beginTransaction', array(), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'getCache', array(), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'transactional', array('func' => $func), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'commit', array(), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->commit();
    }

    public function rollback()
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'rollback', array(), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'getClassMetadata', array('className' => $className), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'createQuery', array('dql' => $dql), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'createNamedQuery', array('name' => $name), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'createQueryBuilder', array(), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'flush', array('entity' => $entity), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'clear', array('entityName' => $entityName), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->clear($entityName);
    }

    public function close()
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'close', array(), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->close();
    }

    public function persist($entity)
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'persist', array('entity' => $entity), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'remove', array('entity' => $entity), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'refresh', array('entity' => $entity), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'detach', array('entity' => $entity), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'merge', array('entity' => $entity), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'contains', array('entity' => $entity), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'getEventManager', array(), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'getConfiguration', array(), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'isOpen', array(), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'getUnitOfWork', array(), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'getProxyFactory', array(), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'initializeObject', array('obj' => $obj), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'getFilters', array(), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'isFiltersStateClean', array(), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'hasFilters', array(), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return $this->valueHolder8c4cd->hasFilters();
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

        $instance->initializer4dc68 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder8c4cd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8c4cd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8c4cd->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, '__get', ['name' => $name], $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        if (isset(self::$publicProperties590b6[$name])) {
            return $this->valueHolder8c4cd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c4cd;

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

        $targetObject = $this->valueHolder8c4cd;
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
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c4cd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8c4cd;
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
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, '__isset', array('name' => $name), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c4cd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8c4cd;
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
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, '__unset', array('name' => $name), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c4cd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8c4cd;
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
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, '__clone', array(), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        $this->valueHolder8c4cd = clone $this->valueHolder8c4cd;
    }

    public function __sleep()
    {
        $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, '__sleep', array(), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;

        return array('valueHolder8c4cd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4dc68 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4dc68;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4dc68 && ($this->initializer4dc68->__invoke($valueHolder8c4cd, $this, 'initializeProxy', array(), $this->initializer4dc68) || 1) && $this->valueHolder8c4cd = $valueHolder8c4cd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8c4cd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8c4cd;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
