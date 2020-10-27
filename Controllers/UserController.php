<?php

use \Models\UserModel as User;

class UserController extends Controller
{

    public function index()
    {
       global $smarty;

       $smarty->assign('users', User::getAllUser());
       $smarty->display('index.tpl');
    }

    public function create()
    {
        die("I WILL CREATE USER");
    }

    public function update()
    {
        die("I WILL UPDATE USER");
    }

    public function show()
    {
        die("I WILL SHOW USER");
    }

    public function delete()
    {
        die("I WILL DELTE USER");
    }
}