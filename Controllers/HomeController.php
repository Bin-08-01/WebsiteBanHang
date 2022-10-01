<?php
require_once __DIR__ . "/../Models/home.php";
class HomeController{
    public home $home_model;
    public function __construct(){
        $this->home_model = new home();
    }

    function list(){
        $data_banner = $this->home_model->getBanner(1,3);
        $data_typical_products = $this->home_model->getTypicalProducts(0, 3);
        $data_list_latest_products = $this->home_model->getLatestProducts(0, 8);
        require_once ("Views/index.php");
    }
}