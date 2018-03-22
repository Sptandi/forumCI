<?php 

class User extends CI_COntroller{

	public function index(){
		$this->load->view("User/pages/beranda");
	}

}