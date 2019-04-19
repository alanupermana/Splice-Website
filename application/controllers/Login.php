<?php

class Login extends CI_Controller{
	public function index(){
		$data['judul'] = 'Login';
		$this->load->view('login/loginUser',$data);
	}

}
