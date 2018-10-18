<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthAdmin_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function login($a){
		$admin = $this->db->get_where('admin','username = "'.$a['username'].'" AND password = "'.$a['password'].'"');
		if($admin->num_rows() > 0){
			return true;
		} else {
			return false;
		}
	}

}
