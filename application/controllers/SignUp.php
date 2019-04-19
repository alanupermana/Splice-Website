<?php

class SignUp extends CI_Controller{
	public function index(){
		$data['judul'] = 'SignUp';
		$this->load->view('signup/signUpUser',$data);
	}

}
