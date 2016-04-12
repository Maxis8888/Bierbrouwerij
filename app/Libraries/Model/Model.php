<?php

namespace Bierbrouwerij\Libraries\Model;

use Bierbrouwerij\Libraries\Config\Config;
use Bierbrouwerij\Libraries\Database\ConnectionManager;

class Model
{
    protected $dbh;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $connectionManager = new ConnectionManager(
            Config::get('database', 'host'),
            Config::get('database', 'user'),
            Config::get('database', 'pass'),
            Config::get('database', 'name')
        );
        $this->dbh = $connectionManager->connect();
    }
}