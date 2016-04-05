<?php

namespace Bierbrouwerij\Controllers;

use Illuminate\Routing\Controller;


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
        echo "hello";
    }

    /**
     * This is the index method.
     */
    public function index()
    {
        echo "Dag";
    }
}