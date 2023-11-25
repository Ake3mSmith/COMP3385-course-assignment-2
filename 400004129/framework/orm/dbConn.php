<?php
include_once '/xampp/400004129/framework/config.php';
class dbConn
{
    private $conn;

    public function __construct()
    {
        $servername = DB_SERVERNAME;
        $username = DB_USERNAME;
        $password = DB_PASSWORD;
        $dbname = DB_NAME;

        $this->conn = new mysqli($servername, $username, $password, $dbname);
    }

    public function closeConn()
    {
        return $this->conn->close();
    }

    public function connectErr()
    {
        return $this->conn->connect_error;
    }

    public function err()
    {
        return $this->conn->error;
    }

    public function queryDb(string $query)
    {
        return $this->conn->query($query);
    }
}
