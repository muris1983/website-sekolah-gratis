<?php
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }

    ?>
<div id="content">

        
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          
          

        </nav>
        
<div class="container-fluid">

         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?php echo isset($breadcrumb) ? $breadcrumb : ''; ?></h6>
            </div>
            <div class="card-body">
                
            <div class="box-header">
              <a class="btn btn-success btn-flat" href="<?php echo base_url().'admin/tulisan/add_tulisan'?>"><span class="fa fa-plus"></span> Tambah Tulisan</a>
            </div>
                
                <br>
                
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
      					<th>Gambar</th>
      					<th>Judul</th>
      					<th>Tanggal</th>
      					<th>Author</th>
      					<th>Baca</th>
                    <th>Kategori</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
          				<?php
          					$no=0;
          					foreach ($data->result_array() as $i) :
          					   $no++;
          					   $tulisan_id=$i['tulisan_id'];
          					   $tulisan_judul=$i['tulisan_judul'];
          					   $tulisan_isi=$i['tulisan_isi'];
          					   $tulisan_tanggal=$i['tanggal'];
          					   $tulisan_author=$i['tulisan_author'];
          					   $tulisan_gambar=$i['tulisan_gambar'];
          					   $tulisan_views=$i['tulisan_views'];
                       $kategori_id=$i['tulisan_kategori_id'];
                       $kategori_nama=$i['tulisan_kategori_nama'];

                    ?>
                <tr>
                  <td><img src="<?php echo base_url().'assets/images/'.$tulisan_gambar;?>" style="width:90px;"></td>
                  <td><?php echo $tulisan_judul;?></td>

        				  <td><?php echo $tulisan_tanggal;?></td>
        				  <td><?php echo $tulisan_author;?></td>
        				  <td><?php echo $tulisan_views;?></td>
        				  <td><?php echo $kategori_nama;?></td>
                  <td style="text-align:right;">
                      
                      <a href="<?php echo base_url().'admin/tulisan/get_edit/'.$tulisan_id;?>" class="btn btn-info btn-icon-split">
                        <span class="icon text-white-50">
                          <i class="fas fa-info-circle"></i>
                        </span>
                        <span class="text">Edit</span>
                      </a>
                      
                      <a href="#" class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#ModalHapus<?php echo $tulisan_id;?>">
                        <span class="icon text-white-50">
                          <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Hapus</span>
                      </a>
                      
                        
                  </td>
                </tr>
				<?php endforeach;?>
                </tbody>
              </table>
                  
                
                
                  
              </div>
            </div>
          </div>

        </div>
   
<?php foreach ($data->result_array() as $i) :
              $tulisan_id=$i['tulisan_id'];
              $tulisan_judul=$i['tulisan_judul'];
              $tulisan_gambar=$i['tulisan_gambar'];
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $tulisan_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Berita</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/tulisan/hapus_tulisan'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							       <input type="hidden" name="kode" value="<?php echo $tulisan_id;?>"/>
                     <input type="hidden" value="<?php echo $tulisan_gambar;?>" name="gambar">
                            <p>Apakah Anda yakin mau menghapus Posting <b><?php echo $tulisan_judul;?></b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php endforeach;?>