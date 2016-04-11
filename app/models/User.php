<?php

namespace Bierbrouwerij\Models;

use Bierbrouwerij\models\Model;


class User extends Model
{
    public function __construct()
    {
        $this->setTable('users');
        $this->setPrimaryKey('id');
    }

    protected $table = 'users';
}