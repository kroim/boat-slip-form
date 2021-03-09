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

    public function check_session()
    {
        if (!isset($_SESSION['user_status']) || !$_SESSION['user_status']) {
            if ($_SERVER['REQUEST_METHOD'] == "GET") {
                header("location: {$this->base_url}/login");
                die();
            } else {
                echo json_encode(['status' => "error", "message" => "You are not logged in"]);
                die();
            }
        }
    }

    public function home()
    {
        $base_url = $this->base_url;
        $sidebar = new stdClass();
        $sidebar->menu = "dashboard";
        $sidebar->sub_menu = "";
        $tests = array();
        require_once __DIR__ . '/../views/main/home.php';
    }

    public function manageCosts()
    {
        $base_url = $this->base_url;
        $sidebar = new stdClass();
        $sidebar->menu = "costs";
        $sidebar->sub_menu = "";
        $costs = $this->mainModel->getCosts();
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

}
