<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{	
		$this->load->view('User/templates/header');
		$this->load->view('User/pages/home');
		$this->load->view('User/templates/footer');
	}

	public function post()
	{	
		$this->load->view('User/templates/header');
		$this->load->view('User/pages/post');
		$this->load->view('User/templates/footer');
	}

	public function showSetting()
	{
		$this->load->view('User/pages/setting');	
	}
}