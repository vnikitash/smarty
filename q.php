<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);


require_once "Controllers/UserController.php";


$rc = new ReflectionClass(UserController::class);

$parameter = $rc->getMethod('test')->getParameters();

$firstParameter = $parameter[0];
$reflectionType = $firstParameter->getType();
echo $reflectionType->getName();

