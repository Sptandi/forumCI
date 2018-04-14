<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{	
		$this->load->view('User/templates/header');
		$this->load->view('User/pages/home');

	}

	public function showSetting()
	{
		$this->load->view('User/pages/setting');	
	}
}