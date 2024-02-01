<?php

class Database {
    private $host;
    private $username;
    private $password ;
    private $database ;

    public function __construct() {
        $this->host = "localhost";
        $this->username =  "u595789867_root";
        $this->password = ">jsh#wd@TkQ2";
        $this->database = "u595789867_lucky";
        $this->connect();
    }

    private function connect() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }else{
           
        }
    }

    public function query($sql) {
        return $this->connection->query($sql);
    }

    public function execute($sql) {
        if ($this->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function fetch($result) {
        return $result->fetch_assoc();
    }

    public function close() {
        $this->connection->close();
    }
}

?>
