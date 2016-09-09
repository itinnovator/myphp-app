<?php
namespace App\Controllers;

use Twig_Loader_Filesystem;
use Twig_Environment;
use itinnovator\BaseController;

class Controller extends BaseController
{
    public function template($data = null)
    {
        $loader = new Twig_Loader_Filesystem($this->theme_path);

        $twig = new Twig_Environment($loader, array(
            'cache' => $this->theme_compilation_path,
        ));

        echo $twig->render('index.html', array('name' => 'Fabien'));
    }
}
