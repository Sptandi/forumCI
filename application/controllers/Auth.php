<?php 

class Auth extends CI_Controller{

	public function login(){
		$this->load->view("Auth/templates/header");
		$this->load->view('Auth/pages/login');
		$this->load->view("Auth/templates/footer");
	}

	public function register(){
		$this->load->view("Auth/templates/header");
		$this->load->view('Auth/pages/register');
		$this->load->view("Auth/templates/footer");
	}

}

?>