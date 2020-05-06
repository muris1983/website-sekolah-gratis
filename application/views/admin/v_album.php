
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
              <a href="#" class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Tambah Kategori</a>
            </div>
                
                <br>
                
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
          					<th>Gambar</th>
          					<th>Album</th>
          					<th>Tanggal</th>
          					<th>Author</th>
          					<th>Jumlah</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
          				<?php
          					$no=0;
          					foreach ($data->result_array() as $i) :
          					   $no++;
          					   $album_id=$i['album_id'];
          					   $album_nama=$i['album_nama'];
          					   $album_tanggal=$i['tanggal'];
          					   $album_author=$i['album_author'];
          					   $album_cover=$i['album_cover'];
          					   $album_jumlah=$i['album_count'];

                    ?>
                <tr>
                  <td><img src="<?php echo base_url().'assets/images/'.$album_cover;?>" style="width:80px;"></td>
                  <td><?php echo $album_nama;?></td>
        				  <td><?php echo $album_tanggal;?></td>
        				  <td><?php echo $album_author;?></td>
        				  <td><?php echo $album_jumlah;?></td>
                  <td style="text-align:right;">
                      
                      <a href="#" class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#ModalEdit<?php echo $album_id;?>">
                        <span class="icon text-white-50">
                          <i class="fas fa-info-circle"></i>
                        </span>
                        <span class="text">Edit</span>
                      </a>
                      
                      <a href="#" class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#ModalHapus<?php echo $album_id;?>">
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
   
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Album</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/album/simpan_album'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama Album</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnama_album" class="form-control" id="inputUserName" placeholder="Nama Album" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Cover Album</label>
                                        <div class="col-sm-7">
                                            <input type="file" name="filefoto" required/>
                                        </div>
                                    </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

  <!--Modal Edit Album-->
  <?php foreach ($data->result_array() as $i) :
              $album_id=$i['album_id'];
              $album_nama=$i['album_nama'];
              $album_tanggal=$i['tanggal'];
              $album_author=$i['album_author'];
              $album_cover=$i['album_cover'];
              $album_jumlah=$i['album_count'];
            ?>

        <div class="modal fade" id="ModalEdit<?php echo $album_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Album</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/album/update_album'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                <input type="hidden" name="kode" value="<?php echo $album_id;?>"/>
                                <input type="hidden" value="<?php echo $album_cover;?>" name="gambar">
                                  <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama Album</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnama_album" class="form-control" value="<?php echo $album_nama;?>" id="inputUserName" placeholder="Nama Album" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Cover Album</label>
                                        <div class="col-sm-7">
                                            <input type="file" name="filefoto"/>
                                        </div>
                                    </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
  <?php endforeach;?>
	<!--Modal Edit Album-->

	<?php foreach ($data->result_array() as $i) :
              $album_id=$i['album_id'];
              $album_nama=$i['album_nama'];
              $album_tanggal=$i['tanggal'];
              $album_author=$i['album_author'];
              $album_cover=$i['album_cover'];
              $album_jumlah=$i['album_count'];
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $album_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Album</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/album/hapus_album'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							       <input type="hidden" name="kode" value="<?php echo $album_id;?>"/>
                     <input type="hidden" value="<?php echo $album_cover;?>" name="gambar">
                            <p>Apakah Anda yakin mau menghapus Posting <b><?php echo $album_nama;?></b> ?</p>

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