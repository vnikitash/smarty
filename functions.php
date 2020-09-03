<?php

function loginEndpoint()
{
    global $smarty;

    $smarty->display('login.tpl');
}

function registerEndpoint()
{
    global $smarty;

    $smarty->display('register.tpl');
}

function cartEndpoint()
{
    global $smarty;

    $smarty->display('cart.tpl');
}

function logoutEndpoint()
{
    die("logout");
}

function mainPageEndpoint()
{
    global $smarty;

    $smarty->display('index.tpl');
}

function adminUsersEndpoint()
{
    global $smarty;

    $smarty->display('admin/users.tpl');
}

function adminCategoriesEndpoint()
{
    global $smarty;

    $smarty->display('admin/categories.tpl');
}

function adminProductsEndpoint()
{
    global $smarty;

    $smarty->display('admin/products.tpl');
}

function adminOrdersEndpoint()
{
    global $smarty;

    $smarty->display('admin/orders.tpl');
}