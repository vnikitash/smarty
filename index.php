<?php

require_once "libs/Smarty.class.php";

$smarty = new Smarty();
$smarty->setTemplateDir('templates');


$action = $_GET['action'] ?? 'main';

switch ($action) {
    case "login":
        loginEndpoint();
        break;
    case "register":
        registerEndpoint();
        break;
    case "logout":
        session_destroy();
        header("Location: /");
        break;
    default:
        $smarty->display('index.tpl');
}




function registerEndpoint()
{
    global $smarty;

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $smarty->display('register.tpl');
    } else {
        //perform registration
    }
}

function loginEndpoint()
{
    global $smarty;

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $smarty->display('login.tpl');
    } else {
        //perform login
    }
}