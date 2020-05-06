<?php
class M_galeri extends CI_Model{

	function get_all_galeri(){
		$hsl=$this->db->query("SELECT tbl_galeri.*,DATE_FORMAT(galeri_tanggal,'%d/%m/%Y') AS tanggal,album_nama FROM tbl_galeri join tbl_album on galeri_album_id=album_id ORDER BY galeri_id DESC");
		return $hsl;
	}
	function simpan_galeri($judul,$album,$user_id,$user_nama,$gambar){
		$this->db->trans_start();
            $this->db->query("insert into tbl_galeri(galeri_judul,galeri_album_id,galeri_pengguna_id,galeri_author,galeri_gambar) values ('$judul','$album','$user_id','$user_nama','$gambar')");
            $this->db->query("update tbl_album set album_count=album_count+1 where album_id='$album'");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
        return true;
        else
        return false;
	}
	
	function update_galeri($galeri_id,$judul,$album,$user_id,$user_nama,$gambar){
		$hsl=$this->db->query("update tbl_galeri set galeri_judul='$judul',galeri_album_id='$album',galeri_pengguna_id='$user_id',galeri_author='$user_nama',galeri_gambar='$gambar' where galeri_id='$galeri_id'");
		return $hsl;
	}
	function update_galeri_tanpa_img($galeri_id,$judul,$album,$user_id,$user_nama){
		$hsl=$this->db->query("update tbl_galeri set galeri_judul='$judul',galeri_album_id='$album',galeri_pengguna_id='$user_id',galeri_author='$user_nama' where galeri_id='$galeri_id'");
		return $hsl;
	}
	function hapus_galeri($kode,$album){
		$this->db->trans_start();
            $this->db->query("delete from tbl_galeri where galeri_id='$kode'");
            $this->db->query("update tbl_album set album_count=album_count-1 where album_id='$album'");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
        return true;
        else
        return false;
	}

	//Front-End
	function get_galeri_home(){
		$hsl=$this->db->query("SELECT tbl_galeri.*,DATE_FORMAT(galeri_tanggal,'%d/%m/%Y') AS tanggal,album_nama FROM tbl_galeri join tbl_album on galeri_album_id=album_id ORDER BY galeri_id DESC limit 4");
		return $hsl;
	}

	function get_galeri_by_album_id($idalbum){
		$hsl=$this->db->query("SELECT tbl_galeri.*,DATE_FORMAT(galeri_tanggal,'%d/%m/%Y') AS tanggal,album_nama FROM tbl_galeri join tbl_album on galeri_album_id=album_id where galeri_album_id='$idalbum' ORDER BY galeri_id DESC");
		return $hsl;
	}
	

}