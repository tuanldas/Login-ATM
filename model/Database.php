<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 25/09/2018
 * Time: 17:52
 */

namespace mondel;

use PDO;

class Database
{
    private $host = "localhost";
    private $user = "root";
    private $db = "atm";
    private $pass = "123456";


    public function connect()
    {
        try {
            $conn = new PDO("mysql:host=" . $this->host . "; dbname=" . $this->db, $this->user, $this->pass);
        } catch (\PDOException $e) {
            echo "failed" . $e->getMessage();
        };

        return $conn;
    }

}