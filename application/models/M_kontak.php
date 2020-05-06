<?php
class M_kontak extends CI_Model{

	function kirim_pesan($nama,$email,$kontak,$pesan){
		$hsl=$this->db->query("INSERT INTO tbl_inbox(inbox_nama,inbox_email,inbox_kontak,inbox_pesan) VALUES ('$nama','$email','$kontak','$pesan')");
		return $hsl;
	}

	function get_all_inbox(){
		$hsl=$this->db->query("SELECT tbl_inbox.*,DATE_FORMAT(inbox_tanggal,'%d %M %Y') AS tanggal FROM tbl_inbox ORDER BY inbox_id DESC");
		return $hsl;
	}

	function hapus_kontak($kode){
		$hsl=$this->db->query("DELETE FROM tbl_inbox WHERE inbox_id='$kode'");
		return $hsl;
	}

	function update_status_kontak(){
		$hsl=$this->db->query("UPDATE tbl_inbox SET inbox_status='0'");
		return $hsl;
	}
}