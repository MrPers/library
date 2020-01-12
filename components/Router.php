<?php

class Router
{
	private $routes;

	public function __construct() {
		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath);
	}

	private function getURI()
	{
		if (!empty($_SERVER['REQUEST_URI'])) {	//return put
		return trim($_SERVER['REQUEST_URI'], '/');
		}
	}

	public function run() {
		$uri = $this->getURI();
       
		foreach ($this->routes as $uriPattern => $path) {

			if(preg_match("~$uriPattern~", $uri)) {
				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                $segments = explode('/', $internalRoute);

				$controllerName = array_shift($segments) . 'Controller';
				$controllerName = ucfirst($controllerName);
				
                $actionName = 'action' . ucfirst(array_shift($segments));
				$controllerObject = new $controllerName;
				// var_dump($controllerObject);
                // var_dump($actionName);
				$result = call_user_func_array(array($controllerObject, $actionName), $segments);
				
				if ($result != null) {
					break;
				}
			}

		}
	}
}