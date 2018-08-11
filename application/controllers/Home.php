<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index(){
		$data = array();

		$data["experiences"] = $this->get_experience(true);

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
		$this->my_view("certifications");
	}

	public function contact(){
		$this->my_view("contact");
	}
}