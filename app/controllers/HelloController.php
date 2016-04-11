<?php

namespace Bierbrouwerij\Controllers;

use Illuminate\Routing\Controller;
<<<<<<< HEAD
use Bierbrouwerij\Views\View;
=======

>>>>>>> develop
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
<<<<<<< HEAD

=======
        $array = [
            'col1',
            'col2',
            'col3'
        ];
        $user = User::find(69);
        echo $user->username;

        unset($array[0]);
        $array = array_values($array);

        print_r($array);

        echo $user->create();
>>>>>>> develop
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