<?php

namespace Bierbrouwerij\Libraries\Config;


class Config
{
    /**
     * Get configuration item.
     *
     * @param $item
     * @return mixed
     */
    public static function get($file, $item)
    {
        $config = include_once ROOT_DIR . '/app/Config/' . $file . '.php';

        return $config[$item];
    }
}