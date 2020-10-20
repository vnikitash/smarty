<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);


require_once "Helpers/DB.php";
require_once "Models/User.php";
















$user = User::find("admin@admin.updated");
$user->save();
/**
 *
 * C - CREATE
 * R - READ
 * U - UPDATE
 * D - DELETE
 *
 */

/*
$user2 = new User();
$user2->setEmail('v@v.v')
    ->setPassword('v@v.v');
    //->save();

*/








