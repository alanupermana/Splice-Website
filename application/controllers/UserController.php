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

	public function newProject()
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
		$this->User->new_project($data);

		redirect('Splice/Studio');

	}

	public function deleteProject($noPro)
	{
		$this->User->delete_project($noPro);
		redirect('Splice/Studio');
	}

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
		$this->User->editModelProfileNonPass($data);
		redirect('Splice/Profile');
	}

	public function do_upload() {
        $config['upload_path']      = './assets/img/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = 4096;
        $config['max_width']        = 1920;
        $config['max_height']       = 1080;

        $this->load->library('upload', $config);

        // if(!$this->upload->do_upload('userfile')) {
        //     redirect('Splice/editProfile');
        // } else {
		// 	$upload = $this->upload->data();
		// 	$avatar = $upload['file_name'];
		// 	$data = array('avatar' => $avatar);
		// 	$this->User->imageUpload($data);
		// 	redirect('Splice/Profile');

		if(!$this->upload->do_upload('userfile')) {
            redirect('Splice/editProfile');
        } else {
            $upload = $this->upload->data();
            $this->User->imageUpload($upload['file_name']);
            redirect('Splice/Profile');
        }
    }


}
