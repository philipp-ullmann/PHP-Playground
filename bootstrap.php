<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use JsonMapper\JsonMapperFactory;

require_once "vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: [__DIR__ . '/src'],
    isDevMode: true,
);

$connection = DriverManager::getConnection([
    'driver' => 'sqlsrv',
    'dbname' => $_ENV['DB_NAME'],
    'host' => 'localhost',
    'user' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASSWORD']
], $config);

$entityManager = new EntityManager($connection, $config);
$jsonMapper = (new JsonMapperFactory())->bestFit();
$apiClient = new ApiClient($jsonMapper);

?>