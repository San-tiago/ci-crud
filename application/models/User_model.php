<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function create($formArray)
	{
		$this->db->insert('tbl_user',$formArray);
    }
    
    public function all(){
        return $users = $this->db->get('tbl_user')->result_array();
    }

    public function getUser($userId){
        $this->db->where('id',$userId);
        return $user = $this->db->get('tbl_user')->row_array();
    }

    public function updateUser($userId,$formArray){
        $this->db->where('id',$userId);
        $this->db->update('tbl_user',$formArray);
    }

    public function deleteUser($userId){
        $this->db->where('id',$userId);
        $this->db->delete('tbl_user');
    }
}
