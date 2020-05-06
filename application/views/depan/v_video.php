<div class="recent_event_area section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">VIDEO INTERAKTIF MATERI SEKOLAH</h3>
                        
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    
                    
                   
                    
                 <div class="table-responsive">
                <table class="table table-striped" id="display">
                  <thead>
                    <tr>
                      <th>No</th>
                        <th>Judul Video</th>
                      <th>Kelas</th>
                      <th>Mata Pelajaran</th>
                      
                      <th>#</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=1;
                      foreach ($data->result() as $row):
                    ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                        <td><?php echo $row->judul_video;?></td>
                      <td><?php echo $row->kelas_nama;?></td>
                      <td><?php echo $row->nama_mapel;?></td>
                      
                      <td><a href="<?php echo site_url('video/lihat/'.$row->id_video);?>" class="btn btn-info">Lihat Video</a></td>
                    </tr>
                  <?php endforeach;?>
                  </tbody>
                </table>
              </div>             
                    
                    
                    
                    
                    
                </div>
                
            </div>
        </div>
    </div>

