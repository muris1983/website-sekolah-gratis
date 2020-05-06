<?php
class Mapel extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_mapel');
	}


	function index(){
        
		$this->data['data']=$this->m_mapel->get_all_mapel();
        
        $this->data['breadcrumb']  = 'Data Mapel';
            
        $this->data['main_view']   = 'admin/v_mapel';
            
        $this->load->view('theme/admintemplate',$this->data);
        
	}

	function simpan_mapel(){
        
		$mapel=strip_tags($this->input->post('namamapel'));
        
        $keterangan=strip_tags($this->input->post('keterangan'));
        
		$this->m_mapel->simpan_mapel($mapel,$keterangan);
        
		echo $this->session->set_flashdata('msg','success');
        
		redirect('admin/mapel');
        
	}

	function update_mapel(){
        
		$kode=strip_tags($this->input->post('kode'));
		$mapel=strip_tags($this->input->post('namamapel'));
        $keterangan=strip_tags($this->input->post('keterangan'));
		$this->m_mapel->update_mapel($kode,$mapel,$keterangan);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/mapel');
        
	}
    
	function hapus_mapel(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_mapel->hapus_mapel($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/mapel');
	}

}
