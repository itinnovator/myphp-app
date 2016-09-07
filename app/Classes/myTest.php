<?php
namespace App\Classes;

use App\Classes\User;

class myTest
{
    public static function test()
    {
        $user = new User;
        echo $user->getMyUser();
    }
}
