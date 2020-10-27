<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 27.10.2020
 * Time: 20:02
 */

namespace Models\Test;

class User
{
    public function whoAmI()
    {
        echo "I am user from Another User.php file in test folder " . PHP_EOL;
    }
}