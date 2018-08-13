<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php';

// this is core controller
class MY_Controller extends CI_Controller {
	public $error = array();
	public $message = array( "success" => "", "error" => "");
	
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
				$experiences[$key]["start_at_text"] = date(DATE_DEFAULT, strtotime($experience["start_at"]));
			}else{
				$experiences[$key]["start_at_text"] = "";
			}

			if($experience["end_at"]){
				$experiences[$key]["end_at_text"] = date(DATE_DEFAULT, strtotime($experience["end_at"]));
			}else{
				$experiences[$key]["end_at_text"] = "Present";
			}

			$experiences[$key]["duration"] = $this->get_duration($experience["start_at"], $experience["end_at"]);
		}
		return $experiences;
	}

	public function get_project(){
		$params = []; $filters = []; $specials = [];
		$params["project"] = ["*"];
		$filters = ["project_status" => 1];
		$specials = ["order_by" => "end_at", "order_type" => "desc"];
		
		$projects = $this->model->gets("project", $params, $filters, $specials);
		foreach($projects as $key => $project){
			if($project["start_at"]){
				$projects[$key]["start_at_text"] = date(DATE_DEFAULT, strtotime($project["start_at"]));
			}else{
				$projects[$key]["start_at_text"] = "";
			}

			if($project["end_at"]){
				$projects[$key]["end_at_text"] = date(DATE_DEFAULT, strtotime($project["end_at"]));
			}else{
				$projects[$key]["end_at_text"] = "Present";
			}

			$projects[$key]["technology_html"] = "<span class='badge'>".implode("</span> <span class='badge'>", explode(",", $project["technology"]))."</span>";

			$projects[$key]["duration"] = $this->get_duration($project["start_at"], $project["end_at"]);
		}
		return $projects;
	}

	public function get_education(){
		$params = []; $filters = []; $specials = [];
		$params["education"] = ["*"];
		$filters = ["education_status" => 1];
		$specials = ["order_by" => "year", "order_type" => "desc"];
		
		$educations = $this->model->gets("education", $params, $filters, $specials);

		return $educations;
	}

	public function get_achievement(){
		$params = []; $filters = []; $specials = [];
		$params["achievement"] = ["*"];
		$filters = ["achievement_status" => 1];
		$specials = ["order_by" => "achievement_order", "order_type" => "asc"];

		$achievements = $this->model->gets("achievement", $params, $filters, $specials);
		
		return $achievements;
	}

	public function get_certificate(){
		$params = []; $filters = []; $specials = [];
		$params["certificate"] = ["*"];
		$filters = ["certificate_status" => 1];
		$specials = ["order_by" => "issued_at", "order_type" => "desc"];
		
		$certificates = $this->model->gets("certificate", $params, $filters, $specials);
		foreach($certificates as $key => $certificate){
			if($certificate["issued_at"]){
				$certificates[$key]["issued_at_text"] = date(DATE_DEFAULT, strtotime($certificate["issued_at"]));
			}else{
				$certificates[$key]["issued_at_text"] = "";
			}

			if($certificate["certificate_image"]){
				$certificates[$key]["certificate_image_text"] = assets_url("images/certificate/".$certificate["certificate_image"]);
			}else{
				$certificates[$key]["certificate_image_text"] = "#";
			}
		}
		return $certificates;
	}

	public function get_count(){
		$count = array();

		$count["experience"] = $this->get_total_experience();
		$count["freelance"] = 3;
		$count["project_live"] = 9;
		$count["project"] = count($this->get_project());
		$count["certificate"] = 10;
		$count["achievement"] = count($this->get_achievement());

		return $count;
	}

	public function get_total_experience($date_format = ""){
		$total_experience_temp = new DateTime("0000-00-00 00:00:00");
		$total_experience = clone $total_experience_temp;

		$experiences = $this->get_experience();

		foreach($experiences as $experience){
			$start_at = new DateTime($experience["start_at"]);
			$end_at = ($experience["end_at"]) ? new DateTime($experience["end_at"]) : new DateTime(date("Y-m-d H:i:s"));
			
			$date_diff = $start_at->diff($end_at);

			$total_experience_temp->add($date_diff);
		}

		$total_experience = $total_experience->diff($total_experience_temp);

		if($date_format){
			return $total_experience->format($date_format);
		}else{
			$total_experience_year = (int)$total_experience->format("%y");
			$total_experience_month = (int)$total_experience->format("%m");

			return round($total_experience_year + $total_experience_month/12, 1);
		}
	}

	public function get_duration($start_at = "", $end_at = ""){
		$start_at = new DateTime($start_at);
		$end_at = new DateTime($end_at);

		$date_diff = $start_at->diff($end_at);

		$date_diff_year = (int)$date_diff->format("%y");
		$date_diff_month = (int)$date_diff->format("%m");
		$date_diff_day = (int)$date_diff->format("%d");

		$date_diff_text = "";

		if($date_diff_year) $date_diff_text .= $date_diff_year . " yr ";
		if($date_diff_month) $date_diff_text .= $date_diff_month . " mos ";
		if($date_diff_day) $date_diff_text .= $date_diff_day . " days ";

		return $date_diff_text;
	}

	public function get_browser_data(){
		$data = array();

		$data["browser"] = $this->browser_library->getBrowser();
		$data["version"] = $this->browser_library->getVersion();
		$data["platform"] = $this->browser_library->getPlatform();
		$data["is_mobile"] = $this->browser_library->isMobile();
		$data["is_tablet"] = $this->browser_library->isTablet();
		$data["is_robot"] = $this->browser_library->isRobot();
		$data["is_facebook"] = $this->browser_library->isFacebook();
		$data["ip"] = $this->get_ip();

		return $data;
	}

	public function get_ip(){
		$ipaddress = '';

		if (isset($_SERVER['HTTP_CLIENT_IP']))
		    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_X_FORWARDED']))
		    $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
		    $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_FORWARDED']))
		    $ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if(isset($_SERVER['REMOTE_ADDR']))
		    $ipaddress = $_SERVER['REMOTE_ADDR'];
		else
		    $ipaddress = 'UNKNOWN';

		return $ipaddress;
	}
}