<?php

use Controllers\IndexController;

/**
 * Routing file
 */

$app->get('/', function() use ($container) {
	$container['IndexController']->getIndex();
});