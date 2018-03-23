<?php 

class Auth extends CI_Controller{

	public function index(){
		$this->load->view("Auth/templates/header");
		$this->load->view('Auth/pages/login');
		$this->load->view("Auth/templates/footer");
	}

	public function login(){
		
	}

}

?>