<?php
class M_setting extends CI_Model {
	function getmenu(){
		return $this->db->get('menu_payment');
	}
	function getsubmenu($id_menu){
		$this->db->where('id_menu', $id_menu);
		return $this->db->get('submenu_payment');
	}
}