<?php
class Database {
    private static $instance = null;
    private $connection;

    private function __construct() {
        $dsn = 'mysql:host=localhost;dbname=database_name;charset=utf8';
        $username = 'username';
        $password = 'password';

        try {
            // Create a new PDO instance to establish the database connection
            $this->connection = new PDO($dsn, $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    // Prevent cloning of the instance to ensure that only one instance of the Database class exists.
    private function __clone() {}

    // Retrieve the singleton instance of the Database class.
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Prepare the SQL statement for execution.
    public function query($sql, $params = []) {
        $stmt = $this->connection->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
