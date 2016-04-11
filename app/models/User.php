<?php

namespace Bierbrouwerij\Models;

use Bierbrouwerij\Libraries\Model\Model;


class User extends Model
{
    protected $table = 'users';

    public function test()
    {
        return "Hello luls";
    }
}