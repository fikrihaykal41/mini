<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class V extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index(){
		$data = array(
			'peserta' => $this->admin_model->getPeserta(),
		);
		$this->load->view('landingPage', $data);
	}

	public function loginAdmin(){
		if($this->session->userdata('status') == 'loginadmin'){
			redirect('/admin');
		}	else {
			$this->load->view('loginadmin');
		}
	}

}
