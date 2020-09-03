<?php

require_once "libs/Smarty.class.php";
require_once "functions.php";

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
    case "admin":
    case "adminUsers":
        adminUsersEndpoint();
        break;
    case "adminCategories":
        adminCategoriesEndpoint();
        break;
    case "adminProducts":
        adminProductsEndpoint();
        break;
    case "adminOrders":
        adminOrdersEndpoint();
        break;
    case "cart":
        cartEndpoint();
        break;
    case "logout":
        logoutEndpoint();
        break;
    default:
        mainPageEndpoint();
        break;
}