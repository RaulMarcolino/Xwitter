<?php

namespace Core;

class Router
{
    public function run()
    {
        $url = $_SERVER['REQUEST_URI'];

        switch ($url) {
            case '/':
                $controllerName = 'App\controllers\HomeController';
                $actionName = 'index';
                break;
            case '/tweet':
                $controllerName = 'App\controllers\DashController';
                $actionName = 'tweet';
                break;
            case '/login':
                $controllerName = 'App\controllers\AuthController';
                $actionName = 'login';
                break;
             case '/register':
                $controllerName = 'App\controllers\AuthController';
                $actionName = 'register';
                break;
            case '/dashboard':
                $controllerName = 'App\controllers\AuthController';
                $actionName = 'dash';
                break;
            case '/logout':
                $controllerName = 'App\controllers\AuthController';
                $actionName = 'logout';
                break;
            default:
                http_response_code(404);
                echo "Página não encontrada!";
                exit;
        }

        if (class_exists($controllerName)) {
            $controller = new $controllerName();
            if (method_exists($controller, $actionName)) {
                $controller->$actionName();
            } else {
                echo "Método '$actionName' não encontrado no controller '$controllerName'!";
            }
        } else {
            echo "Controller '$controllerName' não encontrado!";
        }
    }
}