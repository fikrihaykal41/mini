<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function getPeserta(){
		return $this->db->get('peserta');
	}

	//kelola peserta
	public function add_Peserta($data){
		return $this->db->insert('peserta', $data);
	}

	public function edit_Peserta($notampil, $data){
		$this->db->set($data);
		$this->db->where('notampil', $notampil);
		return $this->db->update('peserta');
	}

	public function del_Peserta($notampil){
		$this->db->where('notampil', $notampil);
		return $this->db->delete('peserta');
	}
	//end of kelola Peserta

	//tes ngitung
	public function ngitung_nilai($notampil,$pasukan,$ujianperpang){
		$this->db->set('pelatih',$pasukan+$ujianperpang);
		$this->db->where('notampil', $notampil);
		return $this->db->update('peserta');
	}
	//end of ngitung

	//kelola nilai 1
	public function edit_nilai1($notampil,$data,$pbb,$danton,$penalty1,$vafor,$penalty2){
		$this->db->set($data);
		$this->db->set('utama',($pbb+$danton)-$penalty1);
		$this->db->set('umum',($pbb+$danton+$vafor)-($penalty1+$penalty2));
		$this->db->set('pasukan',($pbb+$danton+$vafor)-($penalty1+$penalty2));
		$this->db->where('notampil', $notampil);
		return $this->db->update('peserta');
	}
	//end of nilai 1

	//kelola nilai 2
	public function edit_nilai2($notampil,$data,$kostum,$favorit,$ujianperpang){
		$this->db->set($data);
		$this->db->where('notampil', $notampil);
		return $this->db->update('peserta');
	}
	//end of nilai 2

	// Kelola Admin
	public function getAdmin(){
		return $this->db->get('admin');
	}

	public function add_Admin($data){
		return $this->db->insert('admin', $data);
	}

	public function edit_Admin($id_admin, $data){
		$this->db->set($data);
		$this->db->where('id_admin', $id_admin);
		return $this->db->update('admin');
	}

	public function del_Admin($username){
		$this->db->where('username', $username);
		return $this->db->delete('admin');
	}

	public function check_username($username){
		$this->db->where('username', $username);
		return $this->db->count_all_results('admin');
	}

	public function getPassword($id){
		$this->db->where('id_admin', $id);
		return $this->db->get('admin')->result();
	}
	// end Kelola Admin

}
