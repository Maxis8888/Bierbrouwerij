<?php
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 05-04-16
 * Time: 11:20
 */

namespace Bierbrouwerij\Models;


abstract class Model
{
    protected $table;

    public function create(array $data)
    {
        return "Yes";
    }


}