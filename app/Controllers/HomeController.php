<?php

namespace Bierbrouwerij\Controllers;

use Bierbrouwerij\Views\View;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    /**
     * Index.
     */
    public function index()
    {
        View::make('app', [
            'hello' => 'Hallo!'
        ]);
    }
}