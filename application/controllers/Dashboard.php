<?php

class Dashboard extends CI_Controller{

	public function index(){
		$data['judul'] = 'Dashboard';
		$this->load->view('templates/header',$data);
		$this->load->view('Dashboard/dashboardUser');
	}



}
