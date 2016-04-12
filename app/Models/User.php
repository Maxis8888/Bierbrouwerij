<?php

namespace Bierbrouwerij\Models;

use Bierbrouwerij\Libraries\Model\Model;


class User extends Model
{
    protected $table = 'users';

    protected $primaryKey = 'id';

    public function test()
    {
        return "Paul Bergmann";
    }
}