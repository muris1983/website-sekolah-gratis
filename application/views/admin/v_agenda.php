
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
              <a href="" class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Tambah Agenda</a>
            </div>
                
                <br>
                
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
					          <th>#</th>
                    <th>Agenda</th>
                    <th>Tanggal</th>
                    <th>Tempat</th>
                    <th>Waktu</th>
                    <th>Author</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php
					$no=0;
  					foreach ($data->result_array() as $i) :
  					   $no++;
                       $agenda_id=$i['agenda_id'];
                       $agenda_nama=$i['agenda_nama'];
                       $agenda_deskripsi=$i['agenda_deskripsi'];
                       $agenda_mulai=$i['agenda_mulai'];
                       $agenda_selesai=$i['agenda_selesai'];
                       $agenda_tempat=$i['agenda_tempat'];
                       $agenda_waktu=$i['agenda_waktu'];
                       $agenda_keterangan=$i['agenda_keterangan'];
                       $agenda_author=$i['agenda_author'];
                       $tanggal=$i['tanggal'];

                    ?>
                <tr>
                  <td><?php echo $tanggal;?></td>
                  <td><?php echo $agenda_nama;?></td>
                  <td><?php echo $agenda_mulai.' s/d '.$agenda_selesai;?></td>
                  <td><?php echo $agenda_tempat;?></td>
                  <td><?php echo $agenda_waktu;?></td>
                  <td><?php echo $agenda_author;?></td>
                  <td>
                      
                      <a href="#" class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#ModalEdit<?php echo $agenda_id;?>">
                        <span class="icon text-white-50">
                          <i class="fas fa-info-circle"></i>
                        </span>
                        <span class="text">Edit</span>
                      </a>
                      
                      <a href="#" class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#ModalHapus<?php echo $agenda_id;?>">
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
                        <h4 class="modal-title" id="myModalLabel">Add Agenda</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/agenda/simpan_agenda'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama Agenda</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xnama_agenda" class="form-control" id="inputUserName" placeholder="Nama Agenda" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Deskripsi</label>
                                <div class="col-sm-7">
                                  <textarea class="form-control" rows="3" name="xdeskripsi" placeholder="Deskripsi ..." required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                              <label for="inputUserName" class="col-sm-4 control-label">Mulai</label>
                              <div class="col-sm-7">
                                <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" name="xmulai" class="form-control pull-right" id="datepicker" required>
                                </div>
                              </div>
                              <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- Date range -->
                            <div class="form-group">
                             <label for="inputUserName" class="col-sm-4 control-label">Selesai</label>
                              <div class="col-sm-7">
                                <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" name="xselesai" class="form-control pull-right" id="datepicker2" required>
                                </div>
                              </div>
                              <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Tempat</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xtempat" class="form-control" id="inputUserName" placeholder="Tempat" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Waktu</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xwaktu" class="form-control" id="inputUserName" placeholder="Contoh: 10.30-11.00 WIB" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Keterangan</label>
                                <div class="col-sm-7">
                                  <textarea class="form-control" name="xketerangan" rows="2" placeholder="Keterangan ..."></textarea>
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
              $agenda_id=$i['agenda_id'];
              $agenda_nama=$i['agenda_nama'];
              $agenda_deskripsi=$i['agenda_deskripsi'];
              $agenda_mulai=$i['agenda_mulai'];
              $agenda_selesai=$i['agenda_selesai'];
              $agenda_tempat=$i['agenda_tempat'];
              $agenda_waktu=$i['agenda_waktu'];
              $agenda_keterangan=$i['agenda_keterangan'];
              $agenda_author=$i['agenda_author'];
              $tangal=$i['tanggal'];
            ?>
	<!--Modal Edit Pengguna-->
        <div class="modal fade" id="ModalEdit<?php echo $agenda_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Agenda</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/agenda/update_agenda'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama Agenda</label>
                                <div class="col-sm-7">
                                  <input type="hidden" name="kode" value="<?php echo $agenda_id;?>">
                                  <input type="text" name="xnama_agenda" class="form-control" value="<?php echo $agenda_nama;?>" id="inputUserName" placeholder="Nama Agenda" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Deskripsi</label>
                                <div class="col-sm-7">
                                  <textarea class="form-control" rows="3" name="xdeskripsi" placeholder="Deskripsi ..." required><?php echo $agenda_deskripsi;?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                              <label for="inputUserName" class="col-sm-4 control-label">Mulai</label>
                              <div class="col-sm-7">
                                <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" name="xmulai" value="<?php echo $agenda_mulai;?>" class="form-control pull-right datepicker3" required>
                                </div>
                              </div>
                              <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- Date range -->
                            <div class="form-group">
                             <label for="inputUserName" class="col-sm-4 control-label">Selesai</label>
                              <div class="col-sm-7">
                                <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" name="xselesai" value="<?php echo $agenda_selesai;?>" class="form-control pull-right datepicker4" required>
                                </div>
                              </div>
                              <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Tempat</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xtempat" class="form-control" value="<?php echo $agenda_tempat;?>" id="inputUserName" placeholder="Tempat" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Waktu</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xwaktu" class="form-control" value="<?php echo $agenda_waktu;?>" id="inputUserName" placeholder="Contoh: 10.30-11.00 WIB" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Keterangan</label>
                                <div class="col-sm-7">
                                  <textarea class="form-control" name="xketerangan" rows="2" placeholder="Keterangan ..."><?php echo $agenda_keterangan;?></textarea>
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
              $agenda_id=$i['agenda_id'];
              $agenda_nama=$i['agenda_nama'];
              $agenda_deskripsi=$i['agenda_deskripsi'];
              $agenda_mulai=$i['agenda_mulai'];
              $agenda_selesai=$i['agenda_selesai'];
              $agenda_tempat=$i['agenda_tempat'];
              $agenda_waktu=$i['agenda_waktu'];
              $agenda_keterangan=$i['agenda_keterangan'];
              $agenda_author=$i['agenda_author'];
              $tangal=$i['tanggal'];
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $agenda_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Agenda</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/agenda/hapus_agenda'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							<input type="hidden" name="kode" value="<?php echo $agenda_id;?>"/>
                            <p>Apakah Anda yakin mau menghapus Pengguna <b><?php echo $agenda_nama;?></b> ?</p>

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
    
    
