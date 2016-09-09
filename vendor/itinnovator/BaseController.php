<?php

namespace itinnovator;

use itinnovator\Config;

class BaseController
{
    protected $theme_path;

    protected $theme_compilation_path;

    public $frontTheme = 'itinnovator-default';

    public $adminTheme = 'itinnovator';

    public function __construct()
    {
        $this->theme_path = ROOT_DIR . Config::get('view.theme_path') . '/front/' . $this->frontTheme;
        $this->theme_compilation_path = ROOT_DIR . Config::get('view.theme_compilation_path');
    }
}
