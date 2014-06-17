<?php 

/**
 * Autoloader
 */
require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Inversion Object Control
 */

include __DIR__ . '/../app/config/ioc/dev.php';

/**
 * Database Configurations
 */
include __DIR__ . '/../app/config/database.php';

/**
 * Entry point into application routes
 */

use \Slim\Slim;
$app = new Slim();

include __DIR__ . '/../app/config/routing.php';

$app->run();