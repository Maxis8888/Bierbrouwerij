<?php

namespace Bierbrouwerij\Controllers;

use Bierbrouwerij\Libraries\Config\Config;
use Bierbrouwerij\Libraries\View\View;
use Illuminate\Routing\Controller;
use Bierbrouwerij\Models\User;

class HomeController extends Controller
{
    /**
     * Index.
     */
    public function index()
    {
        $user = new User;

        View::make('app', [
            'hello' => 'Hallo!',
            'user' => $user->getUserById(1),
            'title' => 'De Veteraan',
        ]);
    }
}