<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// this is core controller, all login data will come here
class MY_Controller extends CI_Controller {
	public $menu = array();

	public function __construct(){
		parent::__construct();

		// set default time zone
		date_default_timezone_set("Asia/Kolkata");

		// init menu
		$this->set_menu();
	}

	public function my_view($view_file = "", $data = array()){
		$this->load->view("include/header", $data);
		$this->load->view($view_file, $data);
		$this->load->view("include/footer", $data);
	}

	public function set_menu(){
		$params = []; $filters = []; $specials = [];
		$params["menu"] = ["*"];
		$filters = ["menu_status" => 1];
		$specials = ["order_by" => "menu_order", "order_type" => "asc"];
		$menus = $this->model->gets("menu", $params, $filters, $specials);

		foreach($menus as $menu){
			$data = $menu;
			$data["menu_active"] = (uri_string() == $menu["menu_url"]) ? true : false;

			$this->menu[] = $data;
		}
	}
}