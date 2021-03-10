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

    public function addYear($year)
    {
        $check_sql = "select * from years where year=" . $year;
        $check_select = mysqli_query($this->conn, $check_sql);
        if ($check_select->fetch_assoc()) return false;
        $sql = "insert into years (year) values (" . $year . ")";
        return mysqli_query($this->conn, $sql);
    }

    public function editYear($year_id, $year_value)
    {
        $sql = "update years set year=" . $year_value . " where id = " . $year_id;
        return mysqli_query($this->conn, $sql);
    }

    public function removeYear($year_id)
    {
        $sql = "delete from years where id=".$year_id;
        return mysqli_query($this->conn, $sql);
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

    public function getSlipData($year)
    {
        $sql = "select * from slips where YEAR(created_at)=" . $year;
        $select = mysqli_query($this->conn, $sql);
        return $select->fetch_all(MYSQLI_ASSOC);
    }

    public function getSlipItemById($id)
    {
        $sql = "select * from slips where id=" . $id;
        $select = mysqli_query($this->conn, $sql);
        return $select->fetch_assoc();
    }

    public function getCurrentSlip()
    {
        $year = date('Y', strtotime(date("Y-m-d H:i:s")));
        $sql = "select * from slips where YEAR(created_at)='" . $year . "'";
        $select = mysqli_query($this->conn, $sql);
        return $select->fetch_all(MYSQLI_ASSOC);
    }

    public function saveSlipItem($slip_data)
    {
        $created_at = date("Y-m-d H:i:s");
        $year = date('Y', strtotime($created_at));
        $check_sql = "select * from slips where slip_number='" . $slip_data->slip_number . "' and YEAR(created_at)='" . $year . "'";
        $check_select = mysqli_query($this->conn, $check_sql);
        if ($check_select->fetch_assoc()) return false;
        $sql = "insert into slips (first_name, last_name, vessel_name, address1, address2, address3, home_phone, cell_phone, email,"
            . " slip_length, winter_storage, shrink_wrap, slip_number, slip_price, winter_storage_price, tax_price, total_winter_storage,"
            . " shrink_wrap_value, zipper_door, flybridge, mast_up, total_shrink_wrap, payment, created_at) values ('"
            . $slip_data->first_name . "', '" . $slip_data->last_name . "', '" . $slip_data->vessel_name . "', '" . $slip_data->address_1 . "', '"
            . $slip_data->address_2 . "', '" . $slip_data->address_3 . "', '" . $slip_data->home_phone . "', '" . $slip_data->cell_phone . "', '"
            . $slip_data->email . "', " . $slip_data->slip_length . ", '" . $slip_data->winter_storage . "', '" . $slip_data->shrink_wrap . "', '"
            . $slip_data->slip_number . "', " . $slip_data->slip_price . ", " . $slip_data->winter_storage_price . ", "
            . $slip_data->slip_tax . ", " . $slip_data->total_winter_storage . ", " . $slip_data->shrink_wrap_price . ", '"
            . $slip_data->zipper_door . "', '" . $slip_data->flybridge . "', '" . $slip_data->mast_up . "', '"
            . $slip_data->total_shrink_wrap . "', " . $slip_data->payment . ", '" . $created_at . "')";
        print_r($sql);
        return mysqli_query($this->conn, $sql);
    }

    public function updateSlipItem($slip_id, $slip_data)
    {
        $sql = "update slips set first_name='" . $slip_data->first_name . "', last_name='" . $slip_data->last_name . "', vessel_name='" . $slip_data->vessel_name .
            "', vessel_name='" . $slip_data->vessel_name . "', address1='" . $slip_data->address_1 . "', address2='" . $slip_data->address_2 .
            "', address3='" . $slip_data->address_3 . "', home_phone='" . $slip_data->home_phone . "', cell_phone='" . $slip_data->cell_phone .
            "', email='" . $slip_data->email . "', slip_length=" . $slip_data->slip_length . ", winter_storage='" . $slip_data->winter_storage .
            "', shrink_wrap='" . $slip_data->shrink_wrap . "', slip_number='" . $slip_data->slip_number . "', slip_price=" . $slip_data->slip_price .
            ", winter_storage_price=" . $slip_data->winter_storage_price . ", tax_price=" . $slip_data->slip_tax .
            ", total_winter_storage=" . $slip_data->total_winter_storage . ", shrink_wrap_value=" . $slip_data->shrink_wrap_price .
            ", zipper_door='" . $slip_data->zipper_door . "', flybridge='" . $slip_data->flybridge .
            "', mast_up='" . $slip_data->mast_up . "', total_shrink_wrap='" . $slip_data->total_shrink_wrap . "', payment=" . $slip_data->payment .
            " where id=" . $slip_id;
        return mysqli_query($this->conn, $sql);
    }
}