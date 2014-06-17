<?php

namespace Controllers;

use Pimple; 

/**
 * Te Base Controller
 */
class BaseController
{
	protected $app;
	
	function __construct(Pimple $container)
	{
		$this->app = $container;
	}
}