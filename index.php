<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define path to application directory
define('APPLICATION_PATH', substr(realpath(dirname(__FILE__)), 0));
require 'core/Psr4AutoloaderClass.php';
require 'core/EnvProvider.php';
// PSR4 autoloader class.
$loader = new Core\Psr4AutoloaderClass();
$loader->register();

$envProvider = new Core\EnvProvider();
$envData = $envProvider->getEvironmentData('.env');
define('DB_HOST', $envData['DB_HOST']);
define('DB_DATABASE', $envData['DB_DATABASE']);
define('DB_USERNAME', $envData['DB_USERNAME']);
define('DB_PASSWORD', $envData['DB_PASSWORD']);

// Error and Exception handling.
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');

// Route dispatch
$router = new Core\Router();
$router->dispatch();


