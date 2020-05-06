
<div id="content">

        
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          
          

        </nav>
        
<div class="container-fluid">

    <form action="<?php echo base_url().'admin/tulisan/simpan_tulisan'?>" method="post" enctype="multipart/form-data">
        
     <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?php echo isset($breadcrumb) ? $breadcrumb : ''; ?></h6>
            </div>
            <div class="card-body">
            
                
                    
            <div class="box-body">
          <div class="row">
            <div class="col-md-10">
              <input type="text" name="xjudul" class="form-control" placeholder="Judul berita atau artikel" autocomplete="off" required/>
            </div>
            <!-- /.col -->
            <div class="col-md-2">
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-flat pull-right"><span class="fa fa-pencil"></span> Publish</button>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
              
            </div>
          </div></div>
    
    
    <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tulis Berita</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <textarea class="ckeditor" id="ckeditor" name="xisi" required></textarea>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                  
                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  
                   
                    <div class="form-group">
                <label>Kategori</label>
                <select class="form-control select2" name="xkategori" style="width: 100%;" required>
                  <option value="">-Pilih-</option>
				  <?php
					$no=0;
					foreach ($kat->result_array() as $i) :
					   $no++;
                       $kategori_id=$i['kategori_id'];
                       $kategori_nama=$i['kategori_nama'];

                    ?>
                  <option value="<?php echo $kategori_id;?>"><?php echo $kategori_nama;?></option>
				  <?php endforeach;?>
                </select>
              </div>

			  <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="filefoto" style="width: 100%;" required>
              </div>
                  
                    
                </div>
              </div>
            </div>
          </div>
          <!-- DataTales Example -->
    </form>

        </div>
   
