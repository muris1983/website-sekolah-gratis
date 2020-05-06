<?php
class M_kategori extends CI_Model{

	function get_all_kategori(){
		$hsl=$this->db->query("select * from tbl_kategori");
		return $hsl;
	}
	function simpan_kategori($kategori){
		$hsl=$this->db->query("insert into tbl_kategori(kategori_nama) values('$kategori')");
		return $hsl;
	}
	function update_kategori($kode,$kategori){
		$hsl=$this->db->query("update tbl_kategori set kategori_nama='$kategori' where kategori_id='$kode'");
		return $hsl;
	}
	function hapus_kategori($kode){
		$hsl=$this->db->query("delete from tbl_kategori where kategori_id='$kode'");
		return $hsl;
	}
	
	function get_kategori_byid($kategori_id){
		$hsl=$this->db->query("select * from tbl_kategori where kategori_id='$kategori_id'");
		return $hsl;
	}

}