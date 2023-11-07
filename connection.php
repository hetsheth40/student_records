<?php
session_start();
class DbConnection
{

    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'student_record';
    

    protected $connection;

    public function __construct()
    {

        if (!isset($this->connection)) {

            //creating database
            $this->connection = new mysqli($this->host, $this->username, $this->password);
            $create_database = "CREATE DATABASE $this->database";
            $this->connection->query($create_database);

            //connecting database
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        }

        return $this->connection;
    }
}
