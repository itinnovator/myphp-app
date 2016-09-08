<?php

namespace App\Controllers;

class UserController
{
    public function getUserId($id = null, $sirname)
    {
        if (!$id)
            $id = '100';

        echo $id.' '.$sirname;
    }
}
