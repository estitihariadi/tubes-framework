<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_users extends CI_Model {

	public function check_credential()
	{
		$username = set_value('username');
		$password = set_value('password');
		$group = set_value('group');
		
		$hasil = $this->db->where('username', $username)
						  ->where('password', $password)
						  ->limit(1)
						  ->get('users');

		$group = $this->db->where('id', $group)
						  ->get('groups');
		
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}

	public function insert() {
    	$data = array(
    			'username' => $this->input->post('username'),
    			'password' => $this->input->post('password'),
    			'group' => $this->input->post('group')
    		);
    	$this->db->insert('users', $data);
    }

}