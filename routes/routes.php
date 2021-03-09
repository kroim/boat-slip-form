<?php

include "route.php";
include "controllers/MainController.php";

class Routes
{
    private $base_url;
    private $route;
    private $main;

    public function __construct()
    {
        $parsed = parse_ini_file('.env', true);
        $this->base_url = $parsed["base_url"];
        $this->main = new MainController();
        $this->route = new Route();
        $this->mainRoutes();
        $this->route->submit();
    }

    public function mainRoutes()
    {
        $this->route->get("/", function () {
            $this->main->home();
        });
        $this->route->get("/costs", function () {
            $this->main->manageCosts();
        });
        $this->route->post("/costs", function () {
            $this->main->postManageRole($_REQUEST);
        });
    }
}