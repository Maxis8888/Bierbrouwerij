<?php

namespace Bierbrouwerij\Libraries\Database;


class ConnectionManager
{
    private $host;

    private $user;

    private $password;

    private $database;

    private $engine;

    private $dns;

    /**
     * ConnectionManager constructor.
     *
     * @param $host
     * @param $user
     * @param $password
     * @param $database
     * @param string $engine
     */

    public function __construct($host, $user, $password, $database, $engine = 'PDO')
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
        $this->engine = $engine;
        $this->dns = $this->engine.'dbname='.$this->database.';host='.$this->host;
    }

    public function connect()
    {
        return new PDO($this->dns, $this->user, $this->password, $this->user, $this->password);
    }
}