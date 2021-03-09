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

    public function getYears()
    {
        $sql = "select * from years";
        $select = mysqli_query($this->conn, $sql);
        $res = $select->fetch_all(MYSQLI_ASSOC);
        if (count($res)) return $res;
        else {
            $create_sql = "insert into years (year) values (2021)";
            mysqli_query($this->conn, $create_sql);
            $select = mysqli_query($this->conn, $sql);
            $res = $select->fetch_all(MYSQLI_ASSOC);
            return $res;
        }
    }

    public function getCosts()
    {
        $sql = "select * from costs";
        $select = mysqli_query($this->conn, $sql);
        return $select->fetch_all(MYSQLI_ASSOC);
    }

    public function updateCost($id, $name, $cost)
    {
        $sql = "update costs set cost=" . $cost . " where id=" . $id;
        return mysqli_query($this->conn, $sql);
    }
}