<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_pengunjung');
	}
    
	function index(){
        
		if($this->session->userdata('akses')=='1'){
            
			$this->data['visitor'] = $this->m_pengunjung->statistik_pengujung();
            
            $this->data['breadcrumb']  = 'Dashboard';
            
            $this->data['main_view']   = 'admin/v_dashboard';
            
			$this->load->view('theme/admintemplate',$this->data);
            
		}else{
			redirect('administrator');
		}
	
	}
	
}