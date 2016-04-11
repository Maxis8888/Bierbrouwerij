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
    public static function get($item)
    {
        $config = include_once ROOT_DIR . '/app/Config/app.php';

        return $config[$item];
    }
}