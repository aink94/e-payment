<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_authentication extends CI_Model {
	function check_login($user, $pass){
		$this->db->select('user_name, nama_karyawan, id_karyawan, status');
		$this->db->from('karyawan');
		$this->db->where('user_name', $user);
		$this->db->where('user_pass', md5($pass));
		return $this->db->get();
	}
	function set_login($id_user, $time, $id_session){
		$data = array(
			'login_terakhir' => $time, 
			'id_session' => $id_session);
		$this->db->where('id_karyawan', $id_user);
		$this->db->update('karyawan', $data);
		return $this->db->affected_rows();
	}
}