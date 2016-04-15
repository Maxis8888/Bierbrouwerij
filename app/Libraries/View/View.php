<?php

namespace Bierbrouwerij\Libraries\View;


class View
{
    private $path;

    private $variables;

    /**
     * View constructor.
     *
     * @param $file
     * @param array|null $variables
     */
    public function __construct($file, array $variables = null)
    {
        $this->path = dirname(__DIR__) . '../../Views/' . $file;
        $this->variables = $variables;
    }

    /**
     * Make the view.
     *
     * @param $file
     * @param array|null $variables
     */
    public static function make($file, array $variables = null)
    {
        $view = new self($file, $variables);
        $view->output();
    }

    /**
     * Output the view.
     */
    private function output()
    {
        foreach ($this->variables as $variable => $value) {
            ${$variable} = $value;
        }

        require_once $this->path . '.php';
    }
}