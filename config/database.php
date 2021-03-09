<?php

class Database {
    private $_db_server;
    private $_db_user;
    private $_db_password;
    private $_db_name;
    private $conn;

    public function __construct()
    {
        $parsed = parse_ini_file('.env', true);
        $this->_db_server = $parsed["db_server"];
        $this->_db_user = $parsed["db_user"];
        $this->_db_password = $parsed["db_password"];
        $this->_db_name = $parsed["db_name"];
    }

    public function _init()
    {
        // check connection
        $this->conn = new mysqli($this->_db_server, $this->_db_user, $this->_db_password, $this->_db_name);
        if ($this->conn->connect_error) return false;
        return true;
    }

    public function connection() {
        return $this->conn;
    }
}