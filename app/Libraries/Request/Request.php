<?php

namespace Bierbrouwerij\Libraries\Request;


class Request
{
    /**
     * Set magic method.
     *
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $_POST[$name] = $value;

        return true;
    }

    /**
     * Get magic method.
     *
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        if (isset($_POST[$name]))
            return $_POST[$name];
        else
            return null;
    }
}