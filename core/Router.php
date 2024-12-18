<?php

namespace Core;

use Config\Application;
use Core\Request;
use Exception;

/**
 * The router class.
 *
 * This class is used to store and validate routes.
 *
 * @author Nguyen Viet Duong
 */
class Router {

    /**
     * The array of the routes.
     *
     * @var object
     */
    protected $routes = [];

    /**
     * The current route details
     *
     * @var object
     */
    private $route = null;

    /**
     * The current route path
     *
     * @var object
     */
    private $routePath = null;

    public function __construct() {

        $in = APPLICATION_PATH . "/app/Routes.php";

        if (!is_file($in)) {
            throw new Exception("There is no routes defined.");
        }

        $this->routes = include $in;
    }

    /**
     * The decode controller method.
     * 
     * This method accepts a string and decodes it.
     * 
     * For example: Home@index will be [ "controller" => "Home", "action" => "index" ]
     *
     * @param string $route A string representation of route.
     *
     * @return array  The route details.
     * @access  public
     * @since   Method available since Release 1.0.0
     */
    private function decodeControler(string $route): iterable {
        $con = explode('/', $route);

        if (is_array($con) && in_array(reset($con), ['adminhtml', 'Adminhtml'])) {
            return [
                'admin_prefix' => ucfirst($con[0] ?? ''),
                'controller' => ucfirst($con[1] ?? ''),
                'action' => $con[2] ?? '',
            ];
        }

        return [
            'controller' => ucfirst($con[0] ?? ''),
            'action' => $con[1] ?? '',
        ];
    }

    /**
     * The check route method.
     * 
     * The method checks whether the current route is valid 
     * and if it is returns its details.
     *
     * @param string $url The route URL
     * @param string $method The request method (GET, POST ...).
     *
     * @return mixed  Route details or false if route is not found.
     * @access  public
     * @since   Method available since Release 1.0.0
     */
    private function checkRoute(string $url, string $method): ?iterable {

        foreach ($this->routes[$method] as $route_path => $route) {
            if (strpos($url, $route_path) === 0) {

                $route = $this->decodeControler($route);

                $namespace = 'App\Controllers\\';

                if (isset($route['admin_prefix'])) {
                    $namespace.= $route['admin_prefix'] . '\\';
                }

                $route['controller'] = $namespace . $route['controller'];
                $this->routePath = $route_path;
                return $route;
            }
        }
        return NULL;
    }

    /**
     * Check if method is callable.
     *
     * @param object $controller_object The controller object
     *
     * @return void
     * @access  public
     * @since   Method available since Release 1.0.0
     */
    private function methodCallable(AbstractController $controller_object): void {

        if (is_callable(array($controller_object, $this->route['action']))) {
            $action = $this->route['action'];
            $controller_object->$action();
        } else {
            throw new \Exception("Method " . $this->route['action'] . " in controller " . $this->route['controller'] . " is not a callable.");
        }
    }

    /**
     * Check if method exists.
     *
     * @param object $controller_object The controller object
     *
     * @return void
     * @access  public
     * @since   Method available since Release 1.0.0
     */
    private function methodExists(AbstractController $controller_object): void {

        if (method_exists($controller_object, $this->route['action'])) {
            $this->methodCallable($controller_object);
        } else {
            throw new \Exception("Method " . $this->route['action'] . " in controller " . $this->route['controller'] . " is not defined.");
        }
    }

    /**
     * Run route
     *
     * @return void
     * @access  public
     * @since   Method available since Release 1.0.0
     */
    private function runRoute(): void {
        // Check if class exists
        if (class_exists($this->route['controller'])) {

            // Inst the class
            $controller_object = new $this->route['controller']();

            // Check for method
            $this->methodExists($controller_object);
        } else {

            throw new \Exception("Controller class " . $this->route['controller'] . " not found");
        }
    }

    /**
     * Dispatch the route
     * 
     * @return void
     * @access  public
     * @since   Method available since Release 1.0.0
     */
    public function dispatch(): void {

        // Get request url
        $requestUrl = $_SERVER['REQUEST_URI'];

        // Get the method.
        $method = $_SERVER['REQUEST_METHOD'];

        // Get default url if there is no route.
        if ($requestUrl === "/" || $requestUrl === "") {
            $requestUrl = Application::DEFAULT_ROUTE;
        }
        // Validate route
        $this->route = $this->checkRoute($requestUrl, $method);

        if ($this->route === NULL) {
            throw new \Exception('No route matched.', 404);
        }

        // Run the route
        $this->runRoute();
    }

    /**
     * Routes
     *
     * @return array The array of the routes.
     * @access  public
     * @since   Method available since Release 1.0.0
     */
    public function getRoutes(): iterable {
        return $this->routes;
    }
}
