<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('User');
	// 	}

	public function Signup()
	{
		if($_POST['password'] != null){
			if($this->User->Signup()) {
        redirect('Splice/Login');
      } else {
        redirect('Splice/SignUp');
      }
    } else {
      redirect('Splice/Login');
    }
	}

  public function Login() {

    $user = $this->User->findUser();
      if($user != null){
				set_cookie('logged', $user[0]['Username'], '3600');
        redirect('Splice/Dashboard');
      } else {
        redirect('Splice/Login');
      }
	}

	public function Logout() {
		$cookie = $this->input->cookie('logged');
		if(isset($cookie)) {
				delete_cookie('logged');
				redirect('Splice');
		} else {
				session_destroy();
				redirect('Splice');
		}
	}

}
