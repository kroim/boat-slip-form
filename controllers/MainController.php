<?php
include "models/MainModel.php";

class MainController
{
    private $base_url;
    private $mainModel;

    public function __construct()
    {
        $parsed = parse_ini_file('.env', true);
        $this->base_url = $parsed["base_url"];
        $this->mainModel = new MainModel();
    }

    public function home()
    {
        $base_url = $this->base_url;
        $sidebar = new stdClass();
        $sidebar->menu = "dashboard";
        $sidebar->sub_menu = "";
        $query_costs = $this->mainModel->getCosts();
        $cost_data = new stdClass();
        $cost_data->slip_numbers = array();
        $cost_data->slip_costs = array();
        for ($i = 0; $i < count($query_costs); $i++) {
            array_push($cost_data->slip_numbers, $query_costs[$i]['name']);
            array_push($cost_data->slip_costs, $query_costs[$i]['cost']);
        }
        $current_slips_query_res = $this->mainModel->getCurrentSlip();
        $current_slips = array();
        for ($k = 0; $k < count($current_slips_query_res); $k++) {
            array_push($current_slips, $current_slips_query_res[$k]['slip_number']);
        }
        $years = $this->mainModel->getYears();
        require_once __DIR__ . '/../views/main/home.php';
    }

    public function manageCosts()
    {
        $base_url = $this->base_url;
        $sidebar = new stdClass();
        $sidebar->menu = "costs";
        $sidebar->sub_menu = "";
        $costs = $this->mainModel->getCosts();
        $years = $this->mainModel->getYears();
        require_once __DIR__ . "/../views/main/costs.php";
        die();
    }

    public function postManageCosts($request)
    {
        $cost_id = $request['id'];
        $cost_name = $request['name'];
        $cost_value = $request['cost'];
        $query_res = $this->mainModel->updateCost($cost_id, $cost_name, $cost_value);
        if ($query_res) echo json_encode(["status" => "success", "message" => "Updated a cost item successfully"]);
        else echo json_encode(["status" => "error", "message" => "Failed updating a cost item"]);
        die();
    }

    public function manageYears()
    {
        $base_url = $this->base_url;
        $sidebar = new stdClass();
        $sidebar->menu = "manage-years";
        $sidebar->sub_menu = "";
        $years = $this->mainModel->getYears();
        require_once __DIR__ . "/../views/main/manage-years.php";
        die();
    }

    public function postManageYears($request)
    {
        $action = $request['action'];
        if ($action == "add_year") {
            $year_value = $request['year_value'];
            $query_res = $this->mainModel->addYear($year_value);
            if ($query_res) echo json_encode(["status" => "success", "message" => "Created a year successfully"]);
            else echo json_encode(["status" => "error", "message" => "Failed creating a year"]);
        } elseif ($action == "edit_year") {
            $year_id = $request['year_id'];
            $year_value = $request['year_value'];
            $query_res = $this->mainModel->editYear($year_id, $year_value);
            if ($query_res) echo json_encode(["status" => "success", "message" => "Updated a year successfully"]);
            else echo json_encode(["status" => "error", "message" => "Failed updating a year"]);
        } elseif ($action == "remove_year") {
            $year_id = $request['year_id'];
            $query_res = $this->mainModel->removeYear($year_id);
            if ($query_res) echo json_encode(["status" => "success", "message" => "Removed a year successfully"]);
            else echo json_encode(["status" => "error", "message" => "Failed removing a year"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Unknown method"]);
        }
        die();
    }

    public function manageSlipData($request)
    {
        $year = '2021';
        if (isset($request['year'])) $year = $request['year'];
        $base_url = $this->base_url;
        $sidebar = new stdClass();
        $sidebar->menu = "data";
        $sidebar->sub_menu = $year;
        $slips = $this->mainModel->getSlipData($year);
        $years = $this->mainModel->getYears();
        require_once __DIR__ . "/../views/main/slip-data.php";
        die();
    }

    public function getSlipItemById($request)
    {
        $slip_id = $request['slip_id'];
        $slipItem = $this->mainModel->getSlipItemById($slip_id);
        if ($slipItem) echo json_encode(["status" => "success", "data" => $slipItem]);
        else echo json_encode(["status" => "error", "message" => "Failed getting a slip"]);
        die();
    }

    public function saveSlipData($request)
    {
        $action = $request['action'];
        $slip_data = new stdClass();
        $slip_data->first_name = $request['first_name'];
        $slip_data->last_name = $request['last_name'];
        $slip_data->vessel_name = $request['vessel_name'];
        $slip_data->address_1 = $request['address_1'];
        $slip_data->address_2 = $request['address_2'];
        $slip_data->address_3 = $request['address_3'];
        $slip_data->home_phone = $request['home_phone'];
        $slip_data->cell_phone = $request['cell_phone'];
        $slip_data->email = $request['email'];
        $slip_data->slip_length = $request['slip_length'];
        $slip_data->winter_storage = $request['winter_storage'];
        $slip_data->shrink_wrap = $request['shrink_wrap'];
        $slip_data->slip_number = $request['slip_number'];
        $slip_data->slip_price = $request['slip_price'];
        $slip_data->winter_storage_price = $request['winter_storage_price'];
        $slip_data->slip_tax = $request['slip_tax'];
        $slip_data->total_winter_storage = $request['total_winter_storage'];
        $slip_data->shrink_wrap_price = $request['shrink_wrap_price'];
        $slip_data->zipper_door = $request['zipper_door'];
        $slip_data->flybridge = $request['flybridge'];
        $slip_data->mast_up = $request['mast_up'];
        $slip_data->total_shrink_wrap = $request['total_shrink_wrap'];
        $slip_data->payment = $request['payment'];
        if ($action == "add_slip") {
            $query_res = $this->mainModel->saveSlipItem($slip_data);
            if ($query_res) echo json_encode(["status" => "success", "message" => "Saved a slip data successfully"]);
            else echo json_encode(["status" => "error", "message" => "Failed saving a slip"]);
        } elseif ($action == "update_slip") {
            $slip_id = $request['slip_id'];
            $query_res = $this->mainModel->updateSlipItem($slip_id, $slip_data);
            if ($query_res) echo json_encode(["status" => "success", "message" => "Updated a slip successfully"]);
            else echo json_encode(["status" => "error", "message" => "Failed updating a slip"]);
        } else echo json_encode(["status" => "error", "message" => "Unknown method"]);
        die();
    }
}
