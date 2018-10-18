<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
	}

	// kelola peserta
	public function index(){
		if($this->session->userdata('status') != 'loginadmin'){
			redirect('/v/loginadmin');
		}

		$data = array(
			'peserta' => $this->admin_model->getPeserta(),
		);
		$this->load->view('v_peserta', $data);
	}

	public function addPeserta(){
		if(isset($_REQUEST)){
			$data = array(
				'notampil' => $this->input->post('notampil'),
				'nama' => $this->input->post('nama')
			);

			if($this->admin_model->add_Peserta($data)){
				if($this->input->post('code') == 'private'){
					$this->session->set_flashdata('msg', '<div class="alert alert-success">Berhasil menambahkan data baru</div><br>');
					redirect('/admin');
				} else {
					redirect('/admin');
				}
			}
		}
	}

	public function editPeserta(){
		if(isset($_REQUEST)){
			$data = array(
				'notampil' => $this->input->post('notampil'),
				'nama' => $this->input->post('nama')
			);

			if($this->admin_model->edit_Peserta($this->input->post('notampil'), $data)){
				$this->session->set_flashdata('msg', '<div class="alert alert-success">Berhasil mengedit data '.$this->input->post('nama').'</div><br>');
				redirect('/admin');
			}
		}
	}

	public function deletePeserta($notampil){
		if(empty($notampil)){
			redirect('/admin');
		} else {
			if($this->admin_model->del_Peserta($notampil)){
				$this->session->set_flashdata('msg', '<div class="alert alert-success">Data dengan no tampil '.$notampil.' telah dihapus</div><br>');
				redirect('/admin');
			}
		}
	}
	//end of kelola peserta

	//kelola nilai
	public function kelolaNilai1(){
		if($this->session->userdata('status') != 'loginadmin'){
			redirect('/v/loginadmin');
		}

		$data = array(
			'peserta' => $this->admin_model->getPeserta(),
		);

		$this->load->view('v_nilai1', $data);
	}

	public function kelolaNilai2(){
		if($this->session->userdata('status') != 'loginadmin'){
			redirect('/v/loginadmin');
		}

		$data = array(
			'peserta' => $this->admin_model->getPeserta(),
		);

		$this->load->view('v_nilai2', $data);
	}

	public function kelolaNilai3(){
		if($this->session->userdata('status') != 'loginadmin'){
			redirect('/v/loginadmin');
		}

		$data = array(
			'peserta' => $this->admin_model->getPeserta(),
		);

		$this->load->view('v_nilai3', $data);
	}
	//end of kelola nilai

	//ngitung
	public function ngitungNilai(){
		if(isset($_REQUEST)){
			$notampil = $this->input->post('notampil');
			$pasukan = $this->input->post('pasukan');
			$ujianperpang = $this->input->post('ujianperpang');

			if($this->admin_model->ngitung_nilai($notampil,$pasukan,$ujianperpang)){
				$this->session->set_flashdata('msg', '<div class="alert alert-success">Berhasil menghitung nilai '.$this->input->post('nama').'</div><br>');
				redirect('/admin');
			}
		}
	}
	//end of ngitung

	//nila1
	public function editNilai1(){
		if(isset($_REQUEST)){
			$data = array(
				'notampil' => $this->input->post('notampil'),
				'nama' => $this->input->post('nama'),
				'utama' => $this->input->post('utama'),
				'umum' => $this->input->post('umum'),
				'pbb' => $this->input->post('pbb'),
				'danton' => $this->input->post('danton'),
				'penalty1' => $this->input->post('penalty1'),
				'vafor' => $this->input->post('vafor'),
				'penalty2' => $this->input->post('penalty2')				
			);

			$notampil = $this->input->post('notampil');
			$pbb = $this->input->post('pbb');
			$danton = $this->input->post('danton');
			$penalty1 = $this->input->post('penalty1');
			$vafor = $this->input->post('vafor');
			$penalty2 = $this->input->post('penalty2');

			if($this->admin_model->edit_nilai1($notampil,$data,$pbb,$danton,$penalty1,$vafor,$penalty2)){
				$this->session->set_flashdata('msg', '<div class="alert alert-success">Berhasil mengedit data '.$this->input->post('nama').'</div><br>');
				redirect('/admin/kelolaNilai1');
			}
		}
	}
	//nila1

	//nila2
	public function editNilai2(){
		if(isset($_REQUEST)){
			$data = array(
				'notampil' => $this->input->post('notampil'),
				'nama' => $this->input->post('nama'),
				'kostum' => $this->input->post('kostum'),
				'favorit' => $this->input->post('favorit'),
				'ujianperpang' => $this->input->post('ujianperpang')
			);

			$notampil = $this->input->post('notampil');
			$kostum = $this->input->post('kostum');
			$favorit = $this->input->post('favorit');
			$ujianperpang = $this->input->post('ujianperpang');

			if($this->admin_model->edit_nilai2($notampil,$data,$kostum,$favorit,$ujianperpang)){
				$this->session->set_flashdata('msg', '<div class="alert alert-success">Berhasil mengedit data '.$this->input->post('nama').'</div><br>');
				redirect('/admin/kelolaNilai2');
			}
		}
	}
	//nila2

	// Kelola Admin
	public function kelolaAdmin(){
		if($this->session->userdata('status') != 'loginadmin'){
			redirect('/v/loginadmin');
		}
		$data = array(
			'admin' => $this->admin_model->getAdmin(),
		);
		$this->load->view('v_kelolaAdmin',$data);
	}

	public function addAdmin(){
		if(isset($_REQUEST)){
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
			);
			if ($this->admin_model->check_username($this->input->post('username'))>0) {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger">Username sudah ada</div><br>');
				redirect('/admin/kelolaAdmin');
			}else{
				if($this->admin_model->add_Admin($data)){
					$this->session->set_flashdata('msg', '<div class="alert alert-success">Admin Baru berhasil ditambahkan</div><br>');
						redirect('/admin/kelolaAdmin');
				}
			}
		}
	}

	public function check(){
		if ($this->admin_model->getPassword($this->input->post('id_admin'))[0]->password==$this->input->post('cr_password')) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function editAdmin(){
		if(isset($_REQUEST)){
			if ($this->check()) {
				if (empty($this->input->post('new_password'))) {
					$data = array(
						'username' => $this->input->post('username')
					);
				}else{
					$data = array(
						'username' => $this->input->post('username'),
						'password' => $this->input->post('new_password')
					);
				}

				if($this->admin_model->edit_Admin($this->input->post('id_admin'), $data)){
					$this->session->set_flashdata('msg', '<div class="alert alert-success">Berhasil mengedit data '.$this->input->post('username').'</div><br>');
					redirect('/admin/kelolaAdmin');
				}
				echo "<script>alert('test')</script>";
			}
		}else{

		}
	}

	public function deleteAdmin($username){
		if(empty($username)){
			redirect('/admin/kelolaAdmin');
		} else {
			if($this->admin_model->del_Admin($username)){
				$this->session->set_flashdata('msg', '<div class="alert alert-success">Data admin dengan username '.$username.' telah dihapus</div><br>');
				redirect('/admin/kelolaAdmin');
			}
		}
	}
	// end Kelola Admin

}
