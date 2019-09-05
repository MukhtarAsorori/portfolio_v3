<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index(){
		$data = array();

		$data["skills"] = $this->get_skill();
		$data["experiences"] = $this->get_experience(true);
		$data["educations"] = $this->get_education();
		$data["achievements"] = $this->get_achievement();
		$data["count"] = $this->get_count();

		$this->my_view("home", $data);
	}

	public function work_experience(){
		$data = array();

		$data["experiences"] = $this->get_experience();

		$this->my_view("work_experience", $data);
	}

	public function projects(){
		$data = array();

		$data["projects"] = $this->get_project();

		$this->my_view("projects", $data);
	}

	public function certifications(){
		$data = array();

		$data["certificates"] = $this->get_certificate();

		$this->my_view("certifications", $data);
	}

	public function contact(){
		$data = [];
		$this->my_view("contact", $data);
	}

	public function test(){
		$data = [];
		$this->load->library("test_library");

		$projects = $this->get_project();
		foreach($projects as $index => $project){
			if($project["project_demo"]){
				$data["projects"][] = [
					"project_name" => $project["project_name"],
					"project_type" => "demo",
					"project_url" => $project["project_demo"],
					"project_url_test" => $this->test_library->url_test($project["project_demo"]),
				];
			}
			if($project["project_url"]){
				$data["projects"][] = [
					"project_name" => $project["project_name"],
					"project_type" => "url",
					"project_url" => $project["project_url"],
					"project_url_test" => $this->test_library->url_test($project["project_url"]),
				];
			}
			if($project["project_video"]){
				$data["projects"][] = [
					"project_name" => $project["project_name"],
					"project_type" => "video",
					"project_url" => $project["project_video"],
					"project_url_test" => $this->test_library->url_test($project["project_video"]),
				];
			}
		}
		// echo json_encode($data);die;
		$this->my_view("test", $data);
	}
}