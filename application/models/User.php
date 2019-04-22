<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
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

    public function isExist($username) {
        $this->db->where("Username",$username);
        $result = $this->db->get('login')->result_array();
        if(isset($result[0])) {
            return true;
        } else {
            return false;
        }
    }

    public function findUser() {
        $data = array(
            "Username" => $this->input->post('username'),
            "Password" => md5($this->input->post('password'))
        );

        $this->db->where($data);
        $result = $this->db->get('login');
        return $result->result_array();
    }

    // public function imageUpload($imgName) {
    //     $this->db->insert('image_path', array('ImgName' => $imgName));
    // }
    //
    // public function getImage() {
    //     return $this->db->get('image_path')->result_array();
    // }

    public function Get_Project(){
        $this->db->select('*');
        $this->db->from('project');
        $this->db->join('signup','signup.username=project.username');
        $query = $this->db->get();
        return $query->result();
    }

    public function editModelProject($noPro,$data)
	{
		$this->db->where('NoPro', $noPro);
		$this->db->update('project', $data);
	    return;
	}

    public function new_project($data)
    {
        $this->db->insert('project',$data);
        return;
    }

    public function delete_project($noPro)
    {
        $this->db->delete('project', array('NoPro' => $noPro));
        return;
    }
}
