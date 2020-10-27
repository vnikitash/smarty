<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once "vendor/autoload.php";
require_once "Controllers/Controllable.php";
require_once "Models/UserModel.php";
require_once "Helper/DB.php";
require_once "Controllers/Controller.php";
require_once "Controllers/OrderController.php";
require_once "Controllers/UserController.php";
require_once "Controllers/MainController.php";

$smarty = new Smarty();
$smarty->setTemplateDir("Views");

$uri = $_SERVER['REQUEST_URI'] ?? '/';

$uri = ltrim($uri, '/');

$parts = explode("/", $uri);
$controller = array_shift($parts);
$controller = empty($controller) ? 'MainController' : ucfirst(strtolower($controller)) . 'Controller';


$method = array_shift($parts);

$method = empty($method) ? 'index' : strtolower($method);


$controller = new $controller(); // if $controller = 'MainController' => new $controller() => new MainController()
$controller->$method();















/**
 * MVC
 *
 * M - Model
 * V - View
 * C - Controller
 *
 */