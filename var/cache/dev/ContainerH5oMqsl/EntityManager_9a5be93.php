<?php

namespace ContainerH5oMqsl;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5ca6b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3267b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfe54b = [
        
    ];

    public function getConnection()
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'getConnection', array(), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'getMetadataFactory', array(), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'getExpressionBuilder', array(), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'beginTransaction', array(), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'getCache', array(), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'transactional', array('func' => $func), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'commit', array(), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->commit();
    }

    public function rollback()
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'rollback', array(), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'getClassMetadata', array('className' => $className), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'createQuery', array('dql' => $dql), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'createNamedQuery', array('name' => $name), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'createQueryBuilder', array(), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'flush', array('entity' => $entity), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'clear', array('entityName' => $entityName), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->clear($entityName);
    }

    public function close()
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'close', array(), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->close();
    }

    public function persist($entity)
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'persist', array('entity' => $entity), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'remove', array('entity' => $entity), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'refresh', array('entity' => $entity), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'detach', array('entity' => $entity), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'merge', array('entity' => $entity), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'contains', array('entity' => $entity), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'getEventManager', array(), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'getConfiguration', array(), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'isOpen', array(), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'getUnitOfWork', array(), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'getProxyFactory', array(), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'initializeObject', array('obj' => $obj), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'getFilters', array(), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'isFiltersStateClean', array(), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'hasFilters', array(), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return $this->valueHolder5ca6b->hasFilters();
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

        $instance->initializer3267b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5ca6b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5ca6b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5ca6b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, '__get', ['name' => $name], $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        if (isset(self::$publicPropertiesfe54b[$name])) {
            return $this->valueHolder5ca6b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ca6b;

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

        $targetObject = $this->valueHolder5ca6b;
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
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ca6b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5ca6b;
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
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, '__isset', array('name' => $name), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ca6b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5ca6b;
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
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, '__unset', array('name' => $name), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ca6b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5ca6b;
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
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, '__clone', array(), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        $this->valueHolder5ca6b = clone $this->valueHolder5ca6b;
    }

    public function __sleep()
    {
        $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, '__sleep', array(), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;

        return array('valueHolder5ca6b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3267b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3267b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3267b && ($this->initializer3267b->__invoke($valueHolder5ca6b, $this, 'initializeProxy', array(), $this->initializer3267b) || 1) && $this->valueHolder5ca6b = $valueHolder5ca6b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5ca6b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5ca6b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
