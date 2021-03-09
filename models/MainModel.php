<?php

class MainModel
{
    private $conn = null;

    public function __construct()
    {
        $db = new Database();
        if (!$db->_init()) {
            die("DB Connection failed");
        }
        $this->conn = $db->connection();
    }

    public function getCosts()
    {
        $sql = "select * from costs";
        $select = mysqli_query($this->conn, $sql);
        return $select->fetch_all(MYSQLI_ASSOC);
    }
}