<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// this is core controller
class MY_Controller extends CI_Controller {
	public $menu = array();
	public $social = array();
	public $profile = array();

	public function __construct(){
		parent::__construct();

		// set default time zone
		date_default_timezone_set("Asia/Kolkata");

		// init setting
		$this->set_menu();
		$this->set_social();
		$this->set_section();
		$this->set_profile();
	}

	public function my_view($view_file = "", $data = array()){
		$this->load->view("include/header", $data);

		if(!in_array(uri_string(), ["", "about-me"])){
			$this->load->view("section/bio_short", $data);
		}
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

	public function set_social(){
		$params = []; $filters = []; $specials = [];
		$params["social"] = ["*"];
		$filters = ["social_status" => 1];
		$specials = ["order_by" => "social_order", "order_type" => "asc"];
		$this->social = $this->model->gets("social", $params, $filters, $specials);
	}

	public function set_section(){
		$params = []; $filters = []; $specials = [];
		$params["section"] = ["*"];
		$filters = ["section_status" => 1];
		$specials = [];
		$sections = $this->model->gets("section", $params, $filters, $specials);

		foreach($sections as $section){
			$this->section[$section["section_value"]] = $section;
		}
	}

	public function set_profile(){
		$params = []; $filters = []; $specials = [];
		$params["profile"] = ["*"];
		$filters = ["profile_status" => 1];
		$specials = ["single" => true];
		$this->profile = $this->model->gets("profile", $params, $filters, $specials);

		$this->profile["full_name"] = implode(" ", [$this->profile["first_name"], $this->profile["last_name"]]);
		$this->profile["address"] = implode(", ", [$this->profile["city"], $this->profile["country"]]);
		$this->profile["phone_text"] = implode(", ", [$this->profile["phone"], $this->profile["phone_alt"]]);
		$this->profile["email_text"] = implode(", ", [$this->profile["email"], $this->profile["email_alt"]]);
	}

	public function get_experience($home = false){
		$params = []; $filters = []; $specials = [];
		$params["experience"] = ["*"];
		$filters = ["experience_status" => 1];
		$specials = ["order_by" => "start_at", "order_type" => "desc"];
		if($home){
			$specials["limit"] = 2;
		}
		$experiences = $this->model->gets("experience", $params, $filters, $specials);
		foreach($experiences as $key => $experience){
			if($experience["start_at"]){
				$experiences[$key]["start_at"] = date(DATE_DEFAULT, strtotime($experience["start_at"]));
			}else{
				$experiences[$key]["start_at"] = "";
			}

			if($experience["end_at"]){
				$experiences[$key]["end_at"] = date(DATE_DEFAULT, strtotime($experience["end_at"]));
			}else{
				$experiences[$key]["end_at"] = "Present";
			}


		}
		return $experiences;
	}

	public function get_project($home = false){
		$params = []; $filters = []; $specials = [];
		$params["project"] = ["*"];
		$filters = ["project_status" => 1];
		$specials = ["order_by" => "end_at", "order_type" => "desc"];
		if($home){
			$specials["limit"] = 2;
		}
		$projects = $this->model->gets("project", $params, $filters, $specials);
		foreach($projects as $key => $project){
			if($project["start_at"]){
				$projects[$key]["start_at"] = date(DATE_DEFAULT, strtotime($project["start_at"]));
			}else{
				$projects[$key]["start_at"] = "";
			}

			if($project["end_at"]){
				$projects[$key]["end_at"] = date(DATE_DEFAULT, strtotime($project["end_at"]));
			}else{
				$projects[$key]["end_at"] = "Present";
			}

			$projects[$key]["technology_html"] = "<span class='badge'>".implode("</span> <span class='badge'>", explode(",", $project["technology"]))."</span>";
		}
		return $projects;
	}
}