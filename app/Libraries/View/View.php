<?php

namespace Bierbrouwerij\Libraries\View;


class View
{
    private $path;

    private $variables;

    public function __construct($file, array $variables = null)
    {
        $this->path = dirname(__DIR__) . '../../Views/' . $file;
        $this->variables = $variables;
    }

    public static function make($file, array $variables = null)
    {
        $view = new self($file, $variables);

        return $view->output();
    }

    public function output()
    {
        foreach ($this->variables as $variable => $value) {
            ${$variable} = $value;
        }

        require_once $this->path . '.php';
    }
}