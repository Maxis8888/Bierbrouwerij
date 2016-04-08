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
        $user = User::find(69);
        echo $user->username;


        echo $user->create();
    }

    /**
     * This is the index method.
     */
    public function index()
    {
        echo "Dag";
    }
}