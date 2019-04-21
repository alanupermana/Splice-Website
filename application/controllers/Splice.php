<?php

class Splice extends CI_Controller
{
	public function index(){
    $cookie = $this->input->cookie('logged');
    if(isset($cookie) || isset($_SESSION['successLogin'])){
    	$this->Dashboard();
		} else{
			$data['judul'] = 'Splice';
			$this->load->view('templates/headerHome', $data);
			$this->load->view('home/index');
			$this->load->view('templates/footerHome');
		}

	}

	public function Login() {
		$data['judul'] = 'Login | Login';
		$this->load->view('login/loginUser', $data);
	}

	public function SignUp() {
		$data['judul'] = "Sign Up | Splice";
		$this->load->view('signup/signupUser',$data);
	}

	public function Dashboard() {
		$cookie = $this->input->cookie('logged');
		$data['judul'] = "Dashboard | Splice";
		$this->load->view('templates/header', $data);
		$this->load->view('dashboard/dashboardUser');
		$this->load->view('templates/footer');
	}

	public function Studio() {
		$cookie = $this->input->cookie('logged');
		$data['judul'] = "Studio | Splice";
		$this->load->view('templates/header', $data);
		$this->load->view('studio/studioUser');
		$this->load->view('templates/footer');

	}

	public function Community() {
		$cookie = $this->input->cookie('logged');
		$data['judul'] = "Community | Splice";
		$this->load->view('templates/header', $data);
		$this->load->view('community/communityUser');
		$this->load->view('templates/footer');

	}

	public function Profile() {
		$cookie = $this->input->cookie('logged');
		$data['judul'] = $cookie;
		$this->load->view('templates/header', $data);
		$this->load->view('profile/profile');
		$this->load->view('templates/footer');

	}
}
