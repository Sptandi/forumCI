<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{	
		$this->load->view('User/pages/templates/header');
		$this->load->view('User/pages/home');
		//$this->load->view('User/pages/templates/footer');
	}

	public function showSetting()
	{
		$this->load->view('User/pages/setting');	
	}
}