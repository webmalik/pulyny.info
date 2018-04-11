<?php

class Router {

    private $routes;

    public function __construct(){
        $routesPath = ROOT . "/config/routes.php";
        $this->routes = include($routesPath);
    }

    private function getURI() {
        if(!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run(){

        // Отримуємо строку запиту

        $uri = $this->getURI();

        // Перевіряємо наявність такого запиту в routes.php

        foreach ($this->routes as $uriPattern => $path) {

            // Порівнюємо $uriPattern і $uri
            if(preg_match("~$uriPattern~", $uri)) {

                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                // Перевіряємо, який controller і action обробляють запит

                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments)."Controller";
                $controllerName = ucfirst($controllerName);

                $actionName = 'action'.ucfirst(array_shift($segments));
                $parameters = $segments;

            }
        }

        // Подключаємо файл класу-контролера

        $controllerFile = ROOT . "/controllers/" .
                        $controllerName . '.php';

        if(file_exists($controllerFile)) {
            include_once($controllerFile);
        }

        // Створюємо об'єкт та викликаємо метод (тобто action)

        $controllerObject = new $controllerName;
        $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
        if($result != null) {
            exit();
        }
    }



}