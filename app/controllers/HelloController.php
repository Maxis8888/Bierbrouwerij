<?php

namespace Bierbrouwerij\Controllers;

use Illuminate\Routing\Controller;
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
        $array = [
            'col1',
            'col2',
            'col3'
        ];

        unset($array[0]);
        $array = array_values($array);

        print_r($array);
    }

    /**
     * This is the index method.
     */
    public function index()
    {
        echo "Dag";
    }
}