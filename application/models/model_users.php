<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_users extends CI_Model {

	public function check_credential()
	{
		$username = set_value('username');
		$password = set_value('password');
<<<<<<< HEAD
		$group = set_value('group');
=======
<<<<<<< HEAD
		$group = set_value('group');
=======
>>>>>>> 3a79c8d69a33dfb5048a124d5b92b6f8ae7bf9fd
>>>>>>> 454156909725ced9d6d5b291a7dd642f7fffe0c6
		
		$hasil = $this->db->where('username', $username)
						  ->where('password', $password)
						  ->limit(1)
						  ->get('users');
<<<<<<< HEAD

		$group = $this->db->where('id', $group)
						  ->get('groups');
=======
<<<<<<< HEAD

		$group = $this->db->where('id', $group)
						  ->get('groups');
=======
>>>>>>> 3a79c8d69a33dfb5048a124d5b92b6f8ae7bf9fd
>>>>>>> 454156909725ced9d6d5b291a7dd642f7fffe0c6
		
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 454156909725ced9d6d5b291a7dd642f7fffe0c6
	public function insert() {
    	$data = array(
    			'username' => $this->input->post('username'),
    			'password' => $this->input->post('password'),
    			'group' => $this->input->post('group')
    		);
    	$this->db->insert('users', $data);
    }

<<<<<<< HEAD
=======
=======
>>>>>>> 3a79c8d69a33dfb5048a124d5b92b6f8ae7bf9fd
>>>>>>> 454156909725ced9d6d5b291a7dd642f7fffe0c6
}