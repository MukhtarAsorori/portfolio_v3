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
		$data = array();

		if(isset($_POST["submit"])){
			$this->form_validation->set_rules('full_name', 'Full Name', 'trim|required|max_length[50]');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[50]|valid_email');
			$this->form_validation->set_rules('phone', 'Phone', 'trim|required|max_length[50]');
			$this->form_validation->set_rules('message', 'Message', 'trim|required|max_length[1000]');

			if($this->form_validation->run() == false){
            	$this->error = $this->form_validation->error_array();
            }else{
            	if(!$this->input->cookie("portfolio_v3_contact_form", true)){
	            	$data_email = array();
					$data_email["to"] = trim($this->input->post("email", true));
					$data_email["to_name"] = trim($this->input->post("full_name", true));
					$data_email["phone"] = trim($this->input->post("phone", true));
					$data_email["message"] = trim($this->input->post("message", true));
					$this->email_library->send_email("CONTACT_SUCCESS_USER", $data_email);

					$this->message["success"] = "Thanks for contacting me. I will contact you soon. Please check your inbox / spam.";
					
					try{
						$this->input->set_cookie("portfolio_v3_contact_form", true, 60*60*24);
					}catch(Exception $e){

					}
				}else{
					$this->message["error"] = "You have already submitted form, Please try after 24 hours.";
				}
            }
		}
		
		$this->my_view("contact", $data);
	}
}