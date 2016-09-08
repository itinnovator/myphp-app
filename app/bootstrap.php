<?php

//Debug Mode
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Directories
define('ROOT_DIR', dirname(dirname(__FILE__)));
define('VENDOR_DIR', ROOT_DIR.'/vendor');
define('LIBS', VENDOR_DIR.'/libs');

//Inclusion
require(ROOT_DIR . '/config/database.inc.php');
require(VENDOR_DIR . '/autoload.php');
require(ROOT_DIR . '/app/routes.php');

class Bootstrap
{
    public static function run()
    {
        Flight::start();
    }
}
