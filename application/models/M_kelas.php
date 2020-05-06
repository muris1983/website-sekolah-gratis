<?php
class M_kelas extends CI_Model{

	function get_all_kelas(){
		$hsl=$this->db->query("SELECT * FROM tbl_kelas");
		return $hsl;
	}

}