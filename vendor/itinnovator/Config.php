<?php

namespace itinnovator;

class Config
{
    public static function get($config)
    {
        if (!$config)
            return;

        $c = explode('.', $config);

        $data = include(CONFIG_DIR.'/'.$c[0].'.php');

        return $data[$c[1]];
    }
}
