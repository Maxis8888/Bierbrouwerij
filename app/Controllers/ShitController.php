<?php

namespace Bierbrouwerij\Controllers;

use Bierbrouwerij\Libraries\Config\Config;
use Bierbrouwerij\Libraries\View\View;
use Illuminate\Routing\Controller;
use Bierbrouwerij\Models\User;

class ShitController extends Controller
{
    /**
     * Index.
     */
    public function index()
    {
        
        View::make('app', [
            'hello' => 'Hallo!',
    
            'title' => 'De Veteraan',
            'config' => 'Jon'
        ]);
    }
}