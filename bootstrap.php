<?php
// bootstrap.php
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use JsonMapper\JsonMapperFactory;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Attributes
$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: [__DIR__ . '/src'],
    isDevMode: true,
);
// or if you prefer XML
// $config = ORMSetup::createXMLMetadataConfiguration(
//    paths: [__DIR__ . '/config/xml'],
//    isDevMode: true,
//);

// configuring the database connection
$connection = DriverManager::getConnection([
    'driver' => 'pdo_mysql',
    'dbname' => 'development',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
], $config);

// obtaining the entity manager
$entityManager = new EntityManager($connection, $config);

$jsonMapper = (new JsonMapperFactory())->bestFit();
$apiClient = new ApiClient($jsonMapper);

?>