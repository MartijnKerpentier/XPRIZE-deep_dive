<?php
namespace Services;
use PDO;
use PDOException;

class Database
{
    public $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    public $dbname = "test";

    public function test_connection()
    {
        try {
            $conn = new PDO("mysql:host={$this->servername};dbname={$this->dbname}", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
?>