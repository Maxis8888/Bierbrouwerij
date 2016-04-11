<?php

namespace Bierbrouwerij\Views;


class View
{
    private $model;

    private $controller;

    public function __construct($controller, $model)
    {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output()
    {
        return include_once '../Resources/Views/Layouts/app.blade.php';
    }
}