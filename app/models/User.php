<?php

namespace Bierbrouwerij\Models;

use Bierbrouwerij\Models\Model;


class User extends Model
{
    public function __construct()
    {
        $this->setTable('users');
        $this->setPrimaryKey('id');
    }
}