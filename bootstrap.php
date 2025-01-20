<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use JsonMapper\JsonMapperFactory;

require_once "vendor/autoload.php";

$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: [__DIR__ . '/src'],
    isDevMode: true,
);

$connection = DriverManager::getConnection([
    'driver' => 'pdo_mysql',
    'dbname' => 'development',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
], $config);

$entityManager = new EntityManager($connection, $config);
$jsonMapper = (new JsonMapperFactory())->bestFit();
$apiClient = new ApiClient($jsonMapper);

?>