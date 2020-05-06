<?php
class Blog extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
        
		$jum=$this->m_tulisan->berita();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=5;
        $config['base_url'] = base_url() . 'blog/index/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
						//Tambahan untuk styling
	          $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	          $config['full_tag_close']   = '</ul></nav></div>';
	          $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['num_tag_close']    = '</span></li>';
	          $config['cur_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	          $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	          $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['prev_tagl_close']  = '</span>Next</li>';
	          $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	          $config['first_tagl_close'] = '</span></li>';
	          $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['last_tagl_close']  = '</span></li>';
            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['next_link'] = 'Next >>';
            $config['prev_link'] = '<< Prev';
            $this->pagination->initialize($config);
        
            $this->data['page'] =$this->pagination->create_links();
						$this->data['data']=$this->m_tulisan->berita_perpage($offset,$limit);
						$this->data['category']=$this->db->get('tbl_kategori');
						$this->data['populer']=$this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 5");
						
        $this->data['main_view']   = 'depan/v_blog';
        
        $this->load->view('theme/template',$this->data);
        
        
	}
    
	function detail($slugs){
        
		$slug=htmlspecialchars($slugs,ENT_QUOTES);
		$query = $this->db->get_where('tbl_tulisan', array('tulisan_slug' => $slug));
		if($query->num_rows() > 0){
			$b=$query->row_array();
			$kode=$b['tulisan_id'];
			$this->db->query("UPDATE tbl_tulisan SET tulisan_views=tulisan_views+1 WHERE tulisan_id='$kode'");
			$data=$this->m_tulisan->get_berita_by_kode($kode);
			$row=$data->row_array();
			$this->data['id']=$row['tulisan_id'];
			$this->data['title']=$row['tulisan_judul'];
			$this->data['image']=$row['tulisan_gambar'];
			$this->data['blog'] =$row['tulisan_isi'];
			$this->data['tanggal']=$row['tanggal'];
			$this->data['author']=$row['tulisan_author'];
			$this->data['kategori']=$row['tulisan_kategori_nama'];
			$this->data['slug']=$row['tulisan_slug'];
			$this->data['show_komentar']=$this->m_tulisan->show_komentar_by_tulisan_id($kode);
			$this->data['category']=$this->db->get('tbl_kategori');
			$this->data['populer']=$this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 5");
            
			
            
            $this->data['main_view']   = 'depan/v_blog_detail';
        
            $this->load->view('theme/template',$this->data);
            
		}else{
			redirect('artikel');
		}
	}

	function kategori(){
		 $kategori=str_replace("-"," ",$this->uri->segment(3));
		 $query = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan WHERE tulisan_kategori_nama LIKE '%$kategori%' ORDER BY tulisan_views DESC LIMIT 5");
        
		 if($query->num_rows() > 0){
			 $this->data['data']=$query;
			 $this->data['category']=$this->db->get('tbl_kategori');
 			 $this->data['populer']=$this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 5");
             
             $this->data['main_view']   = 'depan/v_blog';
        
             $this->load->view('theme/template',$this->data);
             
		 }else{
			 echo $this->session->set_flashdata('msg','<div class="alert alert-danger">Tidak Ada artikel untuk kategori <b>'.$kategori.'</b></div>');
			 redirect('artikel');
		 }
	}

    function search(){
        $keyword=str_replace("'", "", htmlspecialchars($this->input->get('keyword',TRUE),ENT_QUOTES));
        $query=$this->m_tulisan->cari_berita($keyword);
				if($query->num_rows() > 0){
                    
					$this->data['data']=$query;
					$this->data['category']=$this->db->get('tbl_kategori');
  				      $this->data['populer']=$this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 5");
                    
                    $this->data['main_view']   = 'depan/v_blog';
        
             $this->load->view('theme/template',$this->data);
                    
          
                    
	 		 }else{
                    
				 echo $this->session->set_flashdata('msg','<div class="alert alert-danger">Tidak dapat menemukan artikel dengan kata kunci <b>'.$keyword.'</b></div>');
				 redirect('artikel');
                    
			 }
    }

		function komentar(){
				$kode = htmlspecialchars($this->input->post('id',TRUE),ENT_QUOTES);
				$data=$this->m_tulisan->get_berita_by_kode($kode);
				$row=$data->row_array();
				$slug=$row['tulisan_slug'];
				$nama = htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
				$email = htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
				$komentar = nl2br(htmlspecialchars($this->input->post('komentar',TRUE),ENT_QUOTES));
				if(empty($nama) || empty($email)){
					$this->session->set_flashdata('msg','<div class="alert alert-danger">Masukkan input dengan benar.</div>');
					redirect('artikel/'.$slug);
				}else{
					$data = array(
			        'komentar_nama' 			=> $nama,
			        'komentar_email' 			=> $email,
			        'komentar_isi' 				=> $komentar,
							'komentar_status' 		=> 0,
							'komentar_tulisan_id' => $kode
					);

					$this->db->insert('tbl_komentar', $data);
					$this->session->set_flashdata('msg','<div class="alert alert-info">Komentar Anda akan tampil setelah moderasi.</div>');
					redirect('artikel/'.$slug);
				}
		}

}
