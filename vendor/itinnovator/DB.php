<?php

namespace itinnovator;

use Illuminate\Database\Capsule\Manager as Capsule;
use itinnovator\Config;

class MYDB
{
    public static function Connect()
    {
        $capsule = new Capsule;

        $capsule->addConnection(array(
            'driver'    => 'mysqli',
            'host'      => Config::get('database.DB_SERVER'),
            'database'  => Config::get('database.DB'),
            'username'  => Config::get('database.DB_USER'),
            'password'  => Config::get('database.DB_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => ''
        ));
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
}
