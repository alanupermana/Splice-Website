<?php

class home extends CI_Controller

{
	public function index(){
		$data['judul'] = 'Home';
		$this->load->view('templates/headerHome', $data);
		$this->load->view('home/index');
		$this->load->view('templates/footerHome');
	}

}
