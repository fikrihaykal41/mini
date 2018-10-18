<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthAdmin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('authadmin_model');
	}

	public function login(){
		if(isset($_REQUEST)){
			$credentials = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'status' => 'loginadmin'
			);

			if($this->authadmin_model->login($credentials)){
				$this->session->set_userdata($credentials);
				redirect('/admin');
			}	else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger">Username atau password anda salah</div>');
				redirect('/v/loginadmin');
			}
		}

		else {
			redirect('/v/loginadmin');
		}
	}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('status');
		$this->session->sess_destroy();
	    redirect('v/loginadmin');
	}

}
