<?php
class M_pengguna extends CI_Model{

	function get_all_pengguna(){
		$hsl=$this->db->query("SELECT tbl_pengguna.*,IF(pengguna_jenkel='L','Laki-Laki','Perempuan') AS jenkel FROM tbl_pengguna");
		return $hsl;	
	}

	function simpan_pengguna($nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar){
		$hsl=$this->db->query("INSERT INTO tbl_pengguna (pengguna_nama,pengguna_jenkel,pengguna_username,pengguna_password,pengguna_email,pengguna_nohp,pengguna_level,pengguna_photo) VALUES ('$nama','$jenkel','$username',md5('$password'),'$email','$nohp','$level','$gambar')");
		return $hsl;
	}

	function simpan_pengguna_tanpa_gambar($nama,$jenkel,$username,$password,$email,$nohp,$level){
		$hsl=$this->db->query("INSERT INTO tbl_pengguna (pengguna_nama,pengguna_jenkel,pengguna_username,pengguna_password,pengguna_email,pengguna_nohp,pengguna_level) VALUES ('$nama','$jenkel','$username',md5('$password'),'$email','$nohp','$level')");
		return $hsl;
	}

	//UPDATE PENGGUNA //
	function update_pengguna_tanpa_pass($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar){
		$hsl=$this->db->query("UPDATE tbl_pengguna set pengguna_nama='$nama',pengguna_jenkel='$jenkel',pengguna_username='$username',pengguna_email='$email',pengguna_nohp='$nohp',pengguna_level='$level',pengguna_photo='$gambar' where pengguna_id='$kode'");
		return $hsl;
	}
	function update_pengguna($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar){
		$hsl=$this->db->query("UPDATE tbl_pengguna set pengguna_nama='$nama',pengguna_jenkel='$jenkel',pengguna_username='$username',pengguna_password='$password',pengguna_email='$email',pengguna_nohp='$nohp',pengguna_level='$level',pengguna_photo='$gambar' where pengguna_id='$kode'");
		return $hsl;
	}

	function update_pengguna_tanpa_pass_dan_gambar($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level){
		$hsl=$this->db->query("UPDATE tbl_pengguna set pengguna_nama='$nama',pengguna_jenkel='$jenkel',pengguna_username='$username',pengguna_email='$email',pengguna_nohp='$nohp',pengguna_level='$level' where pengguna_id='$kode'");
		return $hsl;
	}
	function update_pengguna_tanpa_gambar($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level){
		$hsl=$this->db->query("UPDATE tbl_pengguna set pengguna_nama='$nama',pengguna_jenkel='$jenkel',pengguna_username='$username',pengguna_password='$password',pengguna_email='$email',pengguna_nohp='$nohp',pengguna_level='$level' where pengguna_id='$kode'");
		return $hsl;
	}
	//END UPDATE PENGGUNA//

	function hapus_pengguna($kode){
		$hsl=$this->db->query("DELETE FROM tbl_pengguna where pengguna_id='$kode'");
		return $hsl;
	}
	function getusername($id){
		$hsl=$this->db->query("SELECT * FROM tbl_pengguna where pengguna_id='$id'");
		return $hsl;
	}
	function resetpass($id,$pass){
		$hsl=$this->db->query("UPDATE tbl_pengguna set pengguna_password=md5('$pass') where pengguna_id='$id'");
		return $hsl;
	}

	function get_pengguna_login($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_pengguna where pengguna_id='$kode'");
		return $hsl;
	}


}