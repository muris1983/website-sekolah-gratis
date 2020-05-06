
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
              <a href="" class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Tambah File</a>
            </div>
                
                <br>
                
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
					          <th style="width:70px;">#</th>
                    <th>File</th>
                    <th>Tanggal Post</th>
                    <th>Oleh</th>
                    <th>Download</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php
					$no=0;
  					foreach ($data->result_array() as $i) :
  					   $no++;
                       $id=$i['file_id'];
                       $judul=$i['file_judul'];
                       $deskripsi=$i['file_deskripsi'];
                       $oleh=$i['file_oleh'];
                       $tanggal=$i['tanggal'];
                       $download=$i['file_download'];
                       $file=$i['file_data'];
                    ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><a href="<?php echo base_url().'admin/files/download/'.$id;?>"><?php echo $judul;?></a></td>
                  <td><?php echo $tanggal;?></td>
                  <td><?php echo $oleh;?></td>
                  <td><?php echo $download;?></td>
                  <td style="text-align:right;">
                      <a href="#" class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#ModalEdit<?php echo $id;?>">
                        <span class="icon text-white-50">
                          <i class="fas fa-info-circle"></i>
                        </span>
                        <span class="text">Edit</span>
                      </a>
                      
                      <a href="#" class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#ModalHapus<?php echo $id;?>">
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
                        <h4 class="modal-title" id="myModalLabel">Add File</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/files/simpan_file'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Judul</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xjudul" class="form-control" id="inputUserName" placeholder="Judul" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Deskripsi</label>
                                <div class="col-sm-7">
                                  <textarea class="form-control" rows="3" name="xdeskripsi" placeholder="Deskripsi ..." required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Oleh</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xoleh" class="form-control" id="inputUserName" placeholder="Oleh" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">File</label>
                                <div class="col-sm-7">
                                  <input type="file" name="filefoto" required>
                                  NB: file harus bertype pdf|doc|docx|ppt|pptx|zip. ukuran maksimal 2,7 MB.
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


		<?php foreach ($data->result_array() as $i) :
                $id=$i['file_id'];
                $judul=$i['file_judul'];
                $deskripsi=$i['file_deskripsi'];
                $oleh=$i['file_oleh'];
                $tanggal=$i['tanggal'];
                $download=$i['file_download'];
                $file=$i['file_data'];
            ?>
	<!--Modal Edit Pengguna-->
        <div class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit File</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/files/update_file'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                             <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Judul</label>
                                <div class="col-sm-7">
                                  <input type="hidden" name="kode" value="<?php echo $id;?>">
                                  <input type="hidden" name="file" value="<?php echo $file;?>">
                                  <input type="text" name="xjudul" class="form-control" value="<?php echo $judul;?>" id="inputUserName" placeholder="Judul" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Deskripsi</label>
                                <div class="col-sm-7">
                                  <textarea class="form-control" rows="3" name="xdeskripsi" placeholder="Deskripsi ..." required><?php echo $deskripsi;?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Oleh</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xoleh" class="form-control" value="<?php echo $oleh;?>" id="inputUserName" placeholder="Oleh" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">File</label>
                                <div class="col-sm-7">
                                  <input type="file" name="filefoto">
                                  NB: file harus bertype pdf|doc|docx|ppt|pptx|zip. ukuran maksimal 2,7 MB.
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php endforeach;?>

	<?php foreach ($data->result_array() as $i) :
                $id=$i['file_id'];
                $judul=$i['file_judul'];
                $deskripsi=$i['file_deskripsi'];
                $oleh=$i['file_oleh'];
                $tanggal=$i['tanggal'];
                $download=$i['file_download'];
                $file=$i['file_data'];
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus File</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/files/hapus_file'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							             <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                           <input type="hidden" name="file" value="<?php echo $file;?>">
                            <p>Apakah Anda yakin mau menghapus file <b><?php echo $judul;?></b> ?</p>

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
