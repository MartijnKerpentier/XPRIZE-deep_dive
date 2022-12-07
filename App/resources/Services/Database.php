<?php
namespace Services;
use PDO;
use PDOException;

class Database
{
    /*
     * Schrijf de sql-code hier:
     * Als je de databasefunctie wilt aanroepen in de controller,
     * extends deze klasse aan de controller
     */

    public $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    public $dbname = "test";

    public function testConnection(): void
    {
        try {
            $pdo = new PDO("mysql:host={$this->servername};dbname={$this->dbname}", $this->username, $this->password);
            // set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function insertNewTask($title, $description, $publisher, $points, $img_url)
    {
        $pdo = new PDO("mysql:host={$this->servername};dbname={$this->dbname}", $this->username, $this->password);
        $sql = "INSERT INTO Tasks (Title, Description, Publisher, Points, Image) VALUES (?,?,?,?,?)";
        $pdo->prepare($sql)->execute([$title, $description, $publisher, $points, $img_url]);
    }

    public function getTasksData()
    {
        $pdo = new PDO("mysql:host={$this->servername};dbname={$this->dbname}", $this->username, $this->password);
        $sql = 'SELECT * FROM Tasks';
        $sth = $pdo->query($sql);
        return $sth->fetchAll();
    }

    public function getUserData()
    {
        $pdo = new PDO("mysql:host={$this->servername};dbname={$this->dbname}", $this->username, $this->password);
        $sql = 'SELECT * FROM Users';
        $sth = $pdo->query($sql);
        return $sth->fetchAll();
    }

    public function getSpecificUserData($id)
    {
        $pdo = new PDO("mysql:host={$this->servername};dbname={$this->dbname}", $this->username, $this->password);
        $sql = 'SELECT Username, Token FROM Users WHERE id =' . $id;
        $sth = $pdo->query($sql);
        return $sth->fetchAll();
    }

    public function updateUserToken($token, $id)
    {
        $pdo = new PDO("mysql:host={$this->servername};dbname={$this->dbname}", $this->username, $this->password);
        $sql = "UPDATE Users SET token=? WHERE id=?";
        $pdo->prepare($sql)->execute([$token, $id]);
    }

    public function NewUser($Username, $Password)
    {
        $pdo = new PDO("mysql:host={$this->servername};dbname={$this->dbname}", $this->username, $this->password);
        $sql = "INSERT INTO Users (Username, Password, Token, Points) VALUES (?,?,?,?)";
        $pdo->prepare($sql)->execute([$Username, $Password, false, 0]);
    }
}
?>