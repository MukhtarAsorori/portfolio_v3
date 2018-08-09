<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// this is core controller, all login data will come here
class MY_Controller extends CI_Controller {

	public function __construct(){
		parent::__construct();

		// set default time zone
		date_default_timezone_set("Asia/Kolkata");
	}

	public function my_view($view_file = "", $data = array()){
		$this->load->view("include/header", $data);
		$this->load->view($view_file, $data);
		$this->load->view("include/footer", $data);
	}
}