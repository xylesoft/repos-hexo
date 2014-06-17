<?php

namespace Controllers;

/**
 * The Index Controller.
 */
class IndexController extends BaseController
{
	public function getIndex() {
		$sql = "select * from users";

		var_dump($this->app['db']->query($sql));
		echo "Ha";
	//		echo "Hello: " . $this->app['UserService']->getName();
	}
}