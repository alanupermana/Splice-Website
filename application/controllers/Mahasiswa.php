<?php
 // write your name and student id here
class Mahasiswa extends CI_Controller
{

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	//load model "Mahasiswa_model"
	// 	$this->load->model("Mahasiswa_model");
	// 	//load library form validation
	// 	$this->load->library('form_validation');
	// }

	public function index()
	{

		// $data['judul'] = 'Daftar Mahasiswa';
		// $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
		// if ($this->input->post('keyword')) {
		// 	$data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
		// }
		$this->load->view('templates/header', $data);
		// $this->load->view('mahasiswa/index', $data);
		$this->load->view('templates/footer');
	}

// 	public function tambah()
// 	{
// 		$data['judul'] = 'Form Tambah Data Mahasiswa';
//
// 		//from library form_validation, set rules for nama, nim, email = required
// 		$this->load->library('form_validation');
//     $this->form_validation->set_rules('id', 'id', 'max_length[11]');
// 	  $this->form_validation->set_rules('nama', 'nama', 'required|max_length[50]');
// 	  $this->form_validation->set_rules('nim', 'nim', 'required|max_length[10]');
// 	  $this->form_validation->set_rules('email', 'email', 'required|max_length[50]');
//
// 		//conditon in form_validation, if user input form = false, then load page "tambah" again
// 		if(!$this->form_validation->run()){
// 			$this->load->view('templates/header', $data);
// 			$this->load->view('mahasiswa/tambah', $data);
// 			$this->load->view('templates/footer');
//
// 		//else, when successed {
// 		}else{
// 			//call method "tambahDataMahasiswa" in Mahasiswa_model
// 			$this->Mahasiswa_model->tambahDataMahasiswa();
//
// 			//use flashdata to to show alert "added success"
// 			$this->session->set_flashdata('flash','ditambahkan');
//
// 			//back to controller mahasiswa }
// 			redirect(site_url("mahasiswa"));
// 			}
// 	}
//
// 	public function hapus($id)
// 	{
// 		//call method hapusDataMahasiswa with parameter id from mahasiswa_model
// 		$this->Mahasiswa_model->hapusDataMahasiswa($id);
//
// 		//use flashdata to show alert "dihapus"
// 		$this->session->set_flashdata('flash','dihapus');
// 		$this->session->flashdata('flash');
//
// 		//back to controller mahasiswa
// 		redirect(site_url("mahasiswa"));
// 	}
//
// 	public function ubah($id)
// 	{
// 		$data['judul'] = 'Form Ubah Data Mahasiswa';
// 		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
// 		$data['jurusan'] = ['Teknik Informatika', 'Teknik Industri', 'Teknik Elektro', 'DKV', 'MBTI'];
//
// 		//from library form_validation, set rules for nama, nim, email = required
// 		$this->load->library('form_validation');
//     $this->form_validation->set_rules('id', 'id', 'max_length[11]');
// 	  $this->form_validation->set_rules('nama', 'nama', 'required|max_length[50]');
// 	  $this->form_validation->set_rules('nim', 'nim', 'required|max_length[10]');
// 	  $this->form_validation->set_rules('email', 'email', 'required|max_length[50]');
//
// 		//conditon in form_validation, if user input form = false, then load page "ubah" again
// 		if(!$this->form_validation->run()){
// 			$this->load->view('templates/header', $data);
// 			$this->load->view('mahasiswa/ubah', $data);
// 			$this->load->view('templates/footer');
//
// 		//else, when successed {
// 		}else{
// 			//call method "ubahDataMahasiswa" in Mahasiswa_model
// 			$this->Mahasiswa_model->ubahDataMahasiswa($id);
//
// 			//use flashdata to to show alert "data changed successfully"
// 			$this->session->set_flashdata('flash','Diubah');
//
// 			//back to controller mahasiswa }
// 			redirect(site_url("mahasiswa"));
// 		}
// 	}
}
