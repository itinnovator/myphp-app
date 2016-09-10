<?php
namespace App\Controllers;

use Twig_Loader_Filesystem;
use Twig_Environment;
use itinnovator\BaseController;
use itinnovator\IDB;

class Controller extends BaseController
{

    public function db()
    {
        $d = new IDB('test');

        $columns = [
            'firstname' => 'string',
            'lastname' => 'string'
        ];

        return $d->getAll();
    }

    public function template($view, $data = null)
    {
        if (!$view)
            die ('Please define view');

        if (!$data)
            $data = array();

        $loader = new Twig_Loader_Filesystem($this->theme_abs_path);

        $twig = new Twig_Environment($loader, array(
            'cache' => false, //$this->theme_abs_compilation_path,
        ));

        $default = [
            'theme_css_dir' => $this->theme_url . '/css',
            'theme_css_img_dir' => $this->theme_url . '/css/img',
            'theme_js_dir' => $this->theme_url . '/js',
            'theme_img_dir' => $this->theme_url . '/img',
            'theme_fonts_dir' => $this->theme_url . '/fonts'
        ];

        $data = array_merge($data, $default);

        echo $twig->render($view, $data);
    }
}
