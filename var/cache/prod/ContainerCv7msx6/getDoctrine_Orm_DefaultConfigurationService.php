<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.orm.default_configuration' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriverChain.php';
include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/Mapping/Driver/FileDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/XmlDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/SimplifiedXmlDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/Mapping/Driver/FileLocator.php';
include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/Mapping/Driver/SymfonyFileLocator.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/ContainerAwareEntityListenerResolver.php';

$this->services['doctrine.orm.default_configuration'] = $instance = new \Doctrine\ORM\Configuration();

$a = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();

$b = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver(array(($this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Resources/config/doctrine') => 'FOS\\OAuthServerBundle\\Entity'));
$b->setGlobalBasename('mapping');

$a->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'}, array(0 => ($this->targetDirs[3].'/src/AppBundle/Entity'))), 'AppBundle\\Entity');
$a->addDriver($b, 'FOS\\OAuthServerBundle\\Entity');
$a->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/doctrine-mapping') => 'FOS\\UserBundle\\Model'), '.orm.xml')), 'FOS\\UserBundle\\Model');

$instance->setEntityNamespaces(array('AppBundle' => 'AppBundle\\Entity', 'FOSOAuthServerBundle' => 'FOS\\OAuthServerBundle\\Entity'));
$instance->setMetadataCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] : $this->load('getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService.php')) && false ?: '_'});
$instance->setQueryCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_query_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] : $this->load('getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService.php')) && false ?: '_'});
$instance->setResultCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_result_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] : $this->load('getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService.php')) && false ?: '_'});
$instance->setMetadataDriverImpl($a);
$instance->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
$instance->setProxyNamespace('Proxies');
$instance->setAutoGenerateProxyClasses(true);
$instance->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
$instance->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
$instance->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
$instance->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
$instance->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.default_entity_listener_resolver']) ? $this->services['doctrine.orm.default_entity_listener_resolver'] : ($this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this))) && false ?: '_'});
$instance->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array())));

return $instance;