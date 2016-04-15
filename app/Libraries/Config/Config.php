<?php

namespace Bierbrouwerij\Libraries\Config;


class Config
{
    /**
     * Get an item from a configuration file.
     *
     * @param $file
     * @param null $item
     * @return mixed
     */
    public static function get($file, $item = null)
    {
        $file = include(ROOT_DIR . '/app/Config/' . $file . '.php');

        return ($item) ? $file[$item] : $file;
    }
}