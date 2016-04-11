<?php

namespace Bierbrouwerij\Libraries\Database;


class ConnectionManager
{
    private $host;
    private $user;
    private $password;
    private $database;
    private $engine;

    public function __construct()
    {
        // TESTDATA = NOT DEFINITVE.
        $this->host = '10.88.99.11';
        $this->user = 'stefvqk_158';
        $this->password = 'test';
        $this->database = 'stefvqk_bierbrouwerij';
        $this->engine = 'mysql';
    }

    public function connect($host, $user, $password, $database)
    {
        try {
            $conn = new PDO($database, $user, $password);
        } catch(PDOException $e) {
            echo 'There was an error: '.$e->getMessage();
        }

        return $conn;
    }
}