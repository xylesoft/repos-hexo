<?php

use Doctrine\DBAL\Configuration;
use \Doctrine\DBAL\DriverManager;

$connectionParams = array(
    'dbname' => 'hexo_db',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);

// $container['db'] = DriverManager::getConnection($connectionParams, new Configuration);