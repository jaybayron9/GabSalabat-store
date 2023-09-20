<?php 

namespace utils;

use InvalidArgumentException;

class Router {
    protected static $routes = [];
    protected static $namedRoutes = [];  
    
    public static function get($uri, $action = null, $name = null) { 
        if (is_callable($action)) { 
            Router::addRoute('GET', $uri, $action, $name);
        } elseif (is_array($action) && count($action) === 2) { 
            Router::addRoute('GET', $uri, $action, $name);
        } else { 
            throw new InvalidArgumentException("Invalid action format for GET route: $uri");
        }
    }

    public static function post($uri, $action, $name = '') {
        Router::addRoute('POST', $uri, $action, $name);
    } 

    protected static function addRoute($method, $uri, $action, $name) {
        Router::$routes[$method][$uri] = $action;
        Router::$namedRoutes[$name] = $uri;
    }

    public static function name($name) {
        if (isset(Router::$namedRoutes[$name])) {
            return Router::$namedRoutes[$name];
        }
        return null;
    }

    public static function run($uri, $method) {
        $parsedUrl = parse_url($uri);
        $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';

        parse_str($query, $queryParams);

        $matchedRoute = null;

        foreach (Router::$routes[$method] as $routeUri => $action) {
            $pattern = preg_replace('/\//', '\\/', $routeUri);
            $pattern = preg_replace('/\{([a-zA-Z]+)\}/', '(?P<\1>[a-zA-Z0-9-]+)', $pattern);
            $pattern = '/^' . $pattern . '$/';

            if (preg_match($pattern, $parsedUrl['path'], $matches)) {
                $matchedRoute = $routeUri;
                break;
            }
        }

        if ($matchedRoute !== null) {
            $action = Router::$routes[$method][$matchedRoute];
            if (is_array($action)) {
                [$controllerClass, $controllerMethod] = $action;
                $controllerInstance = new $controllerClass();
                $controllerInstance->$controllerMethod($matches, $queryParams);
                return;
            }
            if (is_callable($action)) {
                $action($matches, $queryParams);
                return;
            }
        }

        echo "404 Not Found";
    } 
} 