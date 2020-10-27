<?php

require_once "Models/UserModel.php";
require_once "Models/test/User.php";


use \Models\Test\User as TestUser;
use \Models\UserModel as UserModel;

class User
{
    public function whoAmI()
    {
        echo "I am user from test.php FILE" . PHP_EOL;
    }
}


$u = new UserModel();
$u2 = new User();
$u3 = new TestUser();

$u->whoAmI();
$u2->whoAmI();
$u3->whoAmI();


















die();
/**
trait Helper
{

}


class A {
}

class B extends A {}

class C extends A
{
    use Helper;
}

class D extends A
{

    use Helper;

    public function testTrait()
    {
        $this->a;
        echo "This message from the D class";

    }
}


$d = new D();
$c->testTrait();
echo "<br>";
$d->testTrait();
 *
 */