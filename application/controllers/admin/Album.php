<?php
class Album extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_album');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$this->data['data']=$this->m_album->get_all_album();
        
        $this->data['breadcrumb']  = 'Data Kategori Galeri';
            
        $this->data['main_view']   = 'admin/v_album';
            
        $this->load->view('theme/admintemplate',$this->data);
	}
	
	function simpan_album(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 500;
	                        $config['height']= 400;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
							$album=strip_tags($this->input->post('xnama_album'));
							$kode=$this->session->userdata('idadmin');
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$user_id=$p['pengguna_id'];
							$user_nama=$p['pengguna_nama'];
							$this->m_album->simpan_album($album,$user_id,$user_nama,$gambar);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/album');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/album');
	                }
	                 
	            }else{
					redirect('admin/album');
				}
				
	}
	
	function update_album(){
				
	            $config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 500;
	                        $config['height']= 400;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $album_id=$this->input->post('kode');
	                        $album_nama=strip_tags($this->input->post('xnama_album'));
							$images=$this->input->post('gambar');
							$path='./assets/images/'.$images;
							unlink($path);
							$kode=$this->session->userdata('idadmin');
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$user_id=$p['pengguna_id'];
							$user_nama=$p['pengguna_nama'];
							$this->m_album->update_album($album_id,$album_nama,$user_id,$user_nama,$gambar);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/album');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/album');
	                }
	                
	            }else{
							$album_id=$this->input->post('kode');
	                        $album_nama=strip_tags($this->input->post('xnama_album'));
							$kode=$this->session->userdata('idadmin');
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$user_id=$p['pengguna_id'];
							$user_nama=$p['pengguna_nama'];
							$this->m_album->update_album_tanpa_img($album_id,$album_nama,$user_id,$user_nama);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/album');
	            } 

	}

	function hapus_album(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_album->hapus_album($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/album');
	}

}