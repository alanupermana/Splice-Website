<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    //METHOD MODEL SIGNUP
    public function Signup() {
        date_default_timezone_set('Asia/Jakarta');
        $data = array(
            "Username" => $this->input->post('username'),
            "Name" => $this->input->post('name'),
            "Email" => $this->input->post('email'),
            "Password" => md5($this->input->post('password')),
            "RegisTime" => Date("d-m-Y, H:i:s")
        );
        if($this->isExist($data['Username'])) {
            return false;
        } else {
            $this->db->insert('signup', $data);
            $this->db->insert('login',
            array(
                "Username" => $data['Username'],
                "Password" => $data['Password']
            ));
            $this->db->insert('project',
            array(
                "Username" => $data['Username']
            ));
            return true;
        }
    }

    //METHOD CEK APAKAH SUDAH ADA DENGAN USERNAME SAAT LOGIN?
    public function isExist($username) {
        $this->db->where("Username",$username);
        $result = $this->db->get('login')->result_array();
        if(isset($result[0])) {
            return true;
        } else {
            return false;
        }
    }

    //METHOD CARI USER DI DB UNTUK LOGIN
    public function findUser() {
        $data = array(
            "Username" => $this->input->post('username'),
            "Password" => md5($this->input->post('password'))
        );

        $this->db->where($data);
        $result = $this->db->get('login');
        return $result->result_array();
    }

    // PROJECT

    //METHOD MENDAPATKAN PROJECT BERDASARKAN IDENTITAS USERNAME
    public function Get_Project($cookie){
        $this->db->select('*');
        $this->db->from('project');
        $this->db->where('Username',$cookie);
        $query = $this->db->get();
        return $query->result();
    }

    //METHOD MODEL EDIT PROJECT
    public function editModelProject($noPro,$data)
	{
		$this->db->where('NoPro', $noPro);
		$this->db->update('project', $data);
	    return;
	}

    //METHOD MODEL NEW PROJECT
    public function new_project()
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

        if($this->isExistProject($data['NoPro'])) {
            return false;
        } else {
            $this->db->insert('project',
            array(
                "NoPro" => $data['NoPro'],
                "Username" => $data['Username'],
                "project_name" => $data['project_name'],
                "deskripsi" => $data['deskripsi']
            ));
            return true;
        }
    }

    //METHOD CEK APAKAH SUDAH ADA DENGAN NOMOR PROJECT?
    public function isExistProject($noPro) {
        $this->db->where("NoPro",$noPro);
        $result = $this->db->get('project')->result();
        if(isset($result[0])) {
            return true;
        } else {
            return false;
        }
    }

    //METHOD MODEL DELETE PROJECT
    public function delete_project($noPro)
    {
        $this->db->delete('project', array('NoPro' => $noPro));
        return;
    }


    // PROFILE

    //METHOD MENDAPATKAN PROFILE BERDASARKAN IDENTITAS USERNAME
    public function Get_Profile($cookie){
        $this->db->select('*');
        $this->db->from('signup');
        $this->db->where('Username',$cookie);
        $query = $this->db->get();
        return $query->result();
    }

    //METHOD MODEL EDIT PROFILE TANPA PASSWORD
    public function editModelProfileNonPass($data,$username)
    {
        $this->db->where('username', $username);
        $this->db->update('signup', $data);
        return;
    }

    //METHOD MODEL EDIT PASSWORD
    public function editModelProfilePass($data,$username)
    {
        $this->db->where('username', $username);
        $this->db->update('signup', $data);
        return;
    }

    //METHOD MODEL UPLOAD IMAGE
    public function imageUpload($imgName) {
        $this->db->insert('signup', array('avatar' => $imgName));
        $this->db->update('signup', $imgName);
        return;
    }

    //METHOD MODEL DELETE ACCOUNT
    public function deleteAccount($username)
    {
        $this->db->delete('signup');
        $this->db->where('Username',$username);
        return;
    }
}
