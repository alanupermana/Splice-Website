<?php
class Splice extends CI_Controller
{
	//INDEX
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

	//PAGE LOGIN
	public function Login() {
		$data['judul'] = 'Login | Login';
		$this->load->view('login/loginUser', $data);
	}

	//PAGE SIGNUP
	public function SignUp() {
		$data['judul'] = "Sign Up | Splice";
		$this->load->view('signup/signupUser',$data);
	}

	//PAGE DASHBOARD
	public function Dashboard() {
		$data['judul'] = "Dashboard | Splice";
		$this->load->view('templates/header',$data);
		$this->load->view('dashboard/dashboardUser');
		$this->load->view('templates/footer');
	}

	//PAGE STUDIO
	public function Studio() {
		$cookie = $this->input->cookie('logged');
		$data_project = $this->User->Get_Project($cookie);
		$data['judul'] = "Studio | Splice";
		$this->load->view('templates/header', $data);
		$this->load->view('studio/studioUser',['dataProject'=>$data_project]);
		$this->load->view('templates/footer');
	}

	//PAGE COMMUNITY
	public function Community() {
		$data['judul'] = "Community | Splice";
		$this->load->view('templates/header', $data);
		$this->load->view('community/communityUser');
		$this->load->view('templates/footer');
	}

	//PAGE PROFILE
	public function Profile() {
		$cookie = $this->input->cookie('logged');
		$data_profile = $this->User->Get_Profile($cookie);
		$data['judul'] = $cookie;
		$this->load->view('templates/header',$data);
		$this->load->view('profile/profile',['dataProfile'=>$data_profile]);
		$this->load->view('templates/footer');
	}

	//PAGE EDIT PROFILE
	public function EditProfile(){
		$cookie = $this->input->cookie('logged');
		$data_profile = $this->User->Get_Profile($cookie);
		$data['judul'] = $cookie;
		$this->load->view('templates/header',$data);
		$this->load->view('profile/EditProfile',['dataProfile'=>$data_profile]);
		$this->load->view('templates/footer');
	}
}
