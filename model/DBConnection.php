<?php

namespace Model;

use PDO;
use PDOException;

class DBConnection
{
    public string $dsn;
    public string $user;
    public string $password;

    public function __construct(
        string $dsn,
        string $user,
        string $password
    ) {
        $this->dsn = $dsn;
        $this->password = $password;
        $this->user = $user;
    }

    public function connect(): PDO
    {
        try {
            return new PDO($this->dsn, $this->user, $this->password);
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}
