<?php
class Video extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_video');
		$this->load->model('m_kelas');
		$this->load->model('m_mapel');
		$this->load->library('upload');
	}


	function index(){
		
		$this->data['data']=$this->m_video->get_all_video();
        
        $this->data['kelas']=$this->m_kelas->get_all_kelas();
        
        $this->data['mapel']=$this->m_mapel->get_all_mapel();    
		
        
        $this->data['breadcrumb']  = 'Data Video';
            
        $this->data['main_view']   = 'admin/v_video';
            
        $this->load->view('theme/admintemplate',$this->data);
        
	}
	
	function simpan_video(){
				
        $mapel=strip_tags($this->input->post('mapel'));
        
        $kelas=strip_tags($this->input->post('kelas'));
        
        $source=strip_tags($this->input->post('source'));
        
        $nama=strip_tags($this->input->post('nama'));
        
        $keterangan=strip_tags($this->input->post('keterangan'));
        
		$this->m_video->simpan_video($mapel,$kelas,$source,$nama,$keterangan);
        
		echo $this->session->set_flashdata('msg','success');
        
		redirect('admin/video');
				
	}
	
	function update_video(){
				
	    $mapel=strip_tags($this->input->post('mapel'));
		$kelas=strip_tags($this->input->post('kelas'));
        $source=strip_tags($this->input->post('source'));
        $nama=strip_tags($this->input->post('nama'));
        $keterangan=strip_tags($this->input->post('keterangan'));
        $kode=strip_tags($this->input->post('kode'));
		$this->m_video->update_video($kode,$mapel,$source,$kelas,$nama,$keterangan);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/video');

	}

	function hapus_video(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_video->hapus_video($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/video');
	}

}