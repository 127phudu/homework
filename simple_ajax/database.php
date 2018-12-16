<?php
class Database {

    public static $connection = null;

    public function __construct()
    {
        if(self::$connection){
            return self::$connection;
        }

        $this->connect();

        return self::$connection;

    }

    public function connect() {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $db_name = "simple_ajax";

        // Create connection
        self::$connection = new mysqli($servername, $username, $password, $db_name);

        // Check connection
        if (self::$connection->connect_error) {
            die("Connection failed: " . self::$connection->connect_error);
        }

    }

    public function disconnect() {
        self::$connection->close();
    }

}