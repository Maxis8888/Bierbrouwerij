<?php

namespace Bierbrouwerij\Libraries\Database;

class ConnectionManager
{
    private $host;

    private $user;

    private $password;

    private $database;

    private $engine;

    private $dsn;

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
        $this->dsn = $this->engine.':dbname='.$this->database.';host='.$this->host;
    }

    /**
     * Create a new connection.
     *
     * @return PDO
     */
    public function connect()
    {
        try {
            $dbh = new PDO($this->dsn, $this->user, $this->pass);
        } catch (\PDOException $e) {
            echo "Connection with the database failed " . $e->getMessage();
        }

        return $dbh;
    }
}