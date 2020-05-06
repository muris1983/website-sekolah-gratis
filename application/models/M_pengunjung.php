<?php
class M_pengunjung extends CI_Model{

	function statistik_pengujung(){
        $query = $this->db->query("SELECT DATE_FORMAT(pengunjung_tanggal,'%d') AS tgl,COUNT(pengunjung_ip) AS jumlah FROM tbl_pengunjung WHERE MONTH(pengunjung_tanggal)=MONTH(CURDATE()) GROUP BY DATE(pengunjung_tanggal)");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function visitor_this_year(){
        $query = $this->db->query("SELECT DATE_FORMAT(pengunjung_tanggal,'%M') AS bulan,COUNT(pengunjung_ip) AS jumlah FROM tbl_pengunjung WHERE YEAR(pengunjung_tanggal)=YEAR(CURDATE()) GROUP BY MONTH(pengunjung_tanggal)");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_all_visitors(){
        $hsl=$this->db->query("SELECT * FROM tbl_pengunjung");
        return $hsl;
    }

    function get_sum_visitor_last_year(){
        $hsl=$this->db->query("SELECT COUNT(pengunjung_ip) AS visitor_last_year FROM tbl_pengunjung WHERE YEAR(pengunjung_tanggal)=YEAR(DATE_SUB(CURDATE(), INTERVAL 1 YEAR))");
        return $hsl;
    }

    function get_sum_visitor_this_year(){
        $hsl=$this->db->query("SELECT COUNT(pengunjung_ip) AS jumlah FROM tbl_pengunjung WHERE YEAR(pengunjung_tanggal)=YEAR(CURDATE())");
        return $hsl;
    }

    function get_average_perbulan(){
        $hsl=$this->db->query("SELECT COUNT(pengunjung_ip)/COUNT(DISTINCT MONTH(pengunjung_tanggal)) AS jumlah FROM tbl_pengunjung WHERE YEAR(pengunjung_tanggal)=YEAR(CURDATE())");
        return $hsl;
    }

    function get_sum_visitor_this_month(){
        $hsl=$this->db->query("SELECT COUNT(pengunjung_ip) AS jumlah FROM tbl_pengunjung WHERE MONTH(pengunjung_tanggal)=MONTH(CURDATE())");
        return $hsl;
    }

    function get_sum_visitor_last_month(){
        $hsl=$this->db->query("SELECT COUNT(pengunjung_ip) AS jumlah FROM tbl_pengunjung WHERE MONTH(pengunjung_tanggal)=MONTH(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))");
        return $hsl;
    }

    function get_average_perday(){
        $hsl=$this->db->query("SELECT COUNT(pengunjung_ip)/COUNT(DISTINCT DAY(pengunjung_tanggal)) AS jumlah FROM tbl_pengunjung WHERE MONTH(pengunjung_tanggal)=MONTH(CURDATE())");
        return $hsl;
    }

    function simpan_user_agent($user_ip,$agent){
    	$hsl=$this->db->query("INSERT INTO tbl_pengunjung (pengunjung_ip,pengunjung_perangkat) VALUES('$user_ip','$agent')");
    	return $hsl;
    }

    function cek_ip($user_ip){
    	$hsl=$this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_ip='$user_ip' AND DATE(pengunjung_tanggal)=CURDATE()");
    	return $hsl;
    }

    function count_visitor(){
        $user_ip=$_SERVER['REMOTE_ADDR'];
        if ($this->agent->is_browser()){
            $agent = $this->agent->browser();
        }elseif ($this->agent->is_robot()){
            $agent = $this->agent->robot();
        }elseif ($this->agent->is_mobile()){
            $agent = $this->agent->mobile();
        }else{
            $agent='Other';
        }
        $cek_ip=$this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_ip='$user_ip' AND DATE(pengunjung_tanggal)=CURDATE()");
        if($cek_ip->num_rows() <= 0){
            $hsl=$this->db->query("INSERT INTO tbl_pengunjung (pengunjung_ip,pengunjung_perangkat) VALUES('$user_ip','$agent')");
            return $hsl;
        }
    }

}
