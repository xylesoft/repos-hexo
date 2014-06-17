<?php

$container = new Pimple;

// Controllers
use Controllers\IndexController;

$container['IndexController'] = function() use ($container) { 
	return new IndexController($container); 
};