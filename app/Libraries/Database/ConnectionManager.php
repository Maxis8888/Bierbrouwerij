<?php

namespace Bierbrouwerij\Libraries\Database;

use PDO;

class ConnectionManager
{
    private $host;

    private $user;

    private $pass;

    private $name;

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
    public function __construct($host, $user, $pass, $name, $engine = 'PDO')
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->name = $name;
        $this->engine = $engine;
        $this->dsn = $this->engine.':dbname='.$this->name.';host='.$this->host;
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
            echo "<div class='error-message'><p>Connection with the database failed " . $e->getMessage().'</p></div>';
        }

        return $dbh;
    }
}