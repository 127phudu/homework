<?php

class Database{


    public $host = "localhost";

    public $user = "root";

    public $password = "";

    public $database = "simple_shop";

    public $connection;


    /**
     * Database constructor.
     */
    public function __construct()
    {
        $this->connection = $this->connectionDatabase();
    }

    /**
     * Kết nối cơ sở dữ liệu
     * @return mysqli
     */
    public function connectionDatabase() {
        $connection = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        return $connection;
    }

    public function runQuery($sql) {
        $data = array();
        $result = mysqli_query($this->connection, $sql);

        while($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        return $data;
    }

    /**
     * Đếm số dòng kết quả
     * @param $sql
     * @return int
     */
    public function numRows($sql) {
        $result = mysqli_query($this->connection, $sql);
        $count = mysqli_num_rows($result);
        return $count;
    }
}