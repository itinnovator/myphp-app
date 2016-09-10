<?php

namespace itinnovator;

use itinnovator\Config;

class BaseController
{
    protected $theme_abs_path;

    protected $theme_abs_compilation_path;

    protected $theme_url;

    protected $theme_compilation_url;

    public $frontTheme = 'itinnovator-default';

    public $adminTheme = 'itinnovator';

    public function __construct()
    {
        $theme_path = Config::get('view.theme_path');
        $theme_compilation_path = Config::get('view.theme_compilation_path');
        $web_url = Config::get('app.app_url');

        $this->theme_abs_path = ROOT_DIR . $theme_path . '/front/' . $this->frontTheme;
        $this->theme_abs_compilation_path = ROOT_DIR . $theme_compilation_path;
        $this->theme_url = $web_url . '/front/' . $this->frontTheme;
        $this->theme_compilation_url = $web_url . '/front/' . $this->frontTheme;
    }
}
