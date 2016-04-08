<?php
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 05-04-16
 * Time: 11:25
 */

namespace Bierbrouwerij\Models;

use Bierbrouwerij\Models\Model;


class User extends Model
{
    protected $table = 'users';

    protected $primaryKey = 'id';
}