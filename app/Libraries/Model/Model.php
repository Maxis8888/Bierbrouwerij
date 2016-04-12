<?php

namespace Bierbrouwerij\Libraries\Model;

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
            'vps.itbergmann.com',
            'admin_brouwerij',
            'Bierbrouwerij',
            'admin_brouwerij'
        );
        $this->dbh = $connectionManager->connect();
    }
}