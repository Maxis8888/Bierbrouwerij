<?php

namespace Bierbrouwerij\Controllers;

use Illuminate\Routing\Controller;
use Bierbrouwerij\Views\View;
use Bierbrouwerij\Models\User;


/**
 * Class HelloController
 *
 * @author Paul Bergmann <107546@student.drenthecollege.nl>
 * @package Bierbrouwerij\Controllers
 */
class HelloController extends Controller
{
    /**
     * This is the test method.
     */
    public function hello()
    {

    }

    /**
     * This is the index method.
     */
    public function index()
    {
        $data = [
            'hallo' => 'hallo'
        ];

        View::make('header', $data);
        View::make('app', $data);
    }
}