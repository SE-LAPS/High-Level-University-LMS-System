<?php

namespace classes;

use PDO;
use PDOException;

class DbConnector {
    private static $host = "localhost";
    private static $dbname = "skillbridge";
    private static $dbuser = "root";
    private static $dbpw = "";

    public static function getConnection() {
        $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$dbname;
        try {
            $con = new PDO($dsn, self::$dbuser, self::$dbpw);
            return $con;
        } catch (PDOException $exc) {
            die("ERROR: " . $exc->getMessage());
        }
    }
}
