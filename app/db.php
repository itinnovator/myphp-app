<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use itinnovator\Config;

$capsule = new Capsule;

$capsule->addConnection(array(
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'initinno_myphp_app',
    'username'  => 'initinno_jigesh',
    'password'  => 'Ravalera1#',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => ''
));
$capsule->setAsGlobal();
$capsule->bootEloquent();
