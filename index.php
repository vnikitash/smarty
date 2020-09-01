<?php

require_once "libs/Smarty.class.php";

$smarty = new Smarty();
$smarty->setTemplateDir('templates');


$action = $_GET['action'] ?? 'index';

switch ($action) {
    case "index":
        $smarty->display('index.tpl');
        break;
    case "index2":
        $smarty->display('index2.tpl');
        break;
    case "index3":
        $smarty->display('index3.tpl');
        break;
    default:
        $smarty->display('404.tpl');
        break;
}




sprintf("This is %s", "phone!");