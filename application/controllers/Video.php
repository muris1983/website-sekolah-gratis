<?php
class Video extends CI_Controller{
    
	function __construct(){
		parent::__construct();
		$this->load->model('m_video');
		$this->load->helper('download');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
    
	function index(){
        
        $this->data['main_view']   = 'depan/v_video';
        
		$this->data['data']=$this->m_video->get_all_video();
        
		$this->load->view('theme/template',$this->data);
        
	}

	function lihat(){
        
		$kode=$this->uri->segment(3);
        
		$this->data['data']=$this->m_video->get_video_by_kode($kode);
        
        $this->data['breadcrumb']  = 'Ubah Berita';
            
        $this->data['main_view']   = 'depan/v_detail_video';
            
        $this->load->view('theme/template',$this->data);
        
	}

}
