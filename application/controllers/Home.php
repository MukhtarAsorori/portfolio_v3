<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index(){
		$this->my_view("home");
	}

	public function work_experience(){
		$this->my_view("work_experience");
	}

	public function projects(){
		$this->my_view("projects");
	}

	public function certifications(){
		$this->my_view("certifications");
	}

	public function contact(){
		$this->my_view("contact");
	}
}