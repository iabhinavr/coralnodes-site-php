<?php

class Database {
    
    private $db_host;
    private $db_name;
    private $db_user;
    private $db_password;

    public $con;

    public function __construct() {
        
        $this->db_host = $_ENV['DB_HOST'];
        $this->db_name = $_ENV['DB_NAME'];
        $this->db_user = $_ENV['DB_USER'];
        $this->db_password = $_ENV['DB_PASSWORD'];
    }

    public function db_connect() {
        $this->con = NULL;

        try {
            $this->con = new PDO("mysql:host=" . $this->db_host . ";dbname=" . $this->db_name, $this->db_user, $this->db_password);
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $this->con;
    }
}