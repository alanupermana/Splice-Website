<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	//METHOD SIGNUP
	public function Signup()
	{
		if($_POST['password'] != null){
			if($this->User->Signup()) {
				$this->session->set_flashdata('SuccessReg','Success');
        		redirect('Splice/Login');
      		} else {
				$this->session->set_flashdata('FailReg', 'Fail');
        		redirect('Splice/SignUp');
      		}
    	} else {
			$this->session->set_flashdata('FailReg', 'Fail');
      		redirect('Splice/Login');
    	}
	}

	//METHOD LOGIN
  	public function Login() {
	    $user = $this->User->findUser();
	    if($user != null){
			set_cookie('logged', $user[0]['Username'], '3600');
	        redirect('Splice/Dashboard');
	    } else {
			$this->session->set_flashdata('falselogin','nodata');
	        redirect('Splice/Login');
	    }
	}

	//METHOD LOGOUT
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

	// PROJECT

	//METHOD EDIT PROJECT
	public function editProject()
	{
		$noPro = $this->input->post('NoPro');
		$username = $this->input->post('Username');
		$project_name = $this->input->post('project_name');
		$deskripsi = $this->input->post('deskripsi');
		$data = array(
			'NoPro' => $noPro,
			'Username' => $username,
			'project_name' => $project_name,
			'deskripsi' => $deskripsi
		);
		$this->User->editModelProject($noPro,$data);
		redirect('Splice/Studio');
	}

	//METHOD NEW PROJECT
	public function newProject()
	{
		if($_POST['NoPro'] != null){
			if($this->User->new_project()) {
				redirect('Splice/Studio');
			} else{
				redirect('Splice/Studio');
			}
		}else{
			redirect('Splice/Studio');
		}
	}

	//METHOD DELETE PROJECT
	public function deleteProject($noPro)
	{
		$this->User->delete_project($noPro);
		redirect('Splice/Studio');
	}

	// PROFILE

	//METHOD EDIT PROFILE TANPA PASSWORD
	public function editProfileNonPass()
	{
		$username = $this->input->post('Username');
		$email = $this->input->post('Email');
		$name = $this->input->post('Name');
		$bio = $this->input->post('Bio');
		$data = array(
			'Username' => $username,
			'Email' => $email,
			'Name' => $name,
			'Bio' => $bio
		);
		if(!$this->User->editModelProfileNonPass($data,$username)){
			redirect('Splice/Profile');
		}else{
			redirect('Splice/editProfile');
		}
	}

	//METHOD EDIT PASSWORD
	public function editProfilePass()
	{
		$cookie = $this->input->cookie('logged');
		$username = $cookie;
		$password = $this->input->post('Password');
		$data = array('Password' => $password);
		$this->User->editModelProfilePass($data,$username);
		redirect('Splice/Profile');
	}

	//METHOD UPLOAD IMAGE
	public function do_upload() {
        $config['upload_path']      = './assets/img/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = 4096;
        $config['max_width']        = 1920;
        $config['max_height']       = 1080;

        $this->load->library('upload', $config);

		if(!$this->upload->do_upload('userfile')) {
            redirect('Splice/editProfile');
        } else {
            $upload = $this->upload->data();
            $this->User->imageUpload($upload['file_name']);
            redirect('Splice/Profile');
        }
    }

	//METHOD DELETE ACCOUNT
	public function deleteAcc(){
		$cookie = $this->input->cookie('logged');
		$this->User->deleteAccount($cookie);
		redirect('Splice');
	}
}
