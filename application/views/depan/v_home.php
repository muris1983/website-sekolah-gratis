<?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>

<div class="slider_area">
        <div class="slider_active owl-carousel">
            <!-- single_carouse -->
            <div class="single_slider  d-flex align-items-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h1 class="text-center text-white">SEKOLAH TEKNOLOGI MURIS </h1>
                                <h2 class="text-center text-white">Memajukan Dunia Pendidikan Menggunakan Teknologi </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ single_carouse -->
            
        </div>
    </div>


<div class="recent_news_area section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">Berita Sekolah</h3>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                
                
                
                <?php foreach ($berita->result() as $row) :?>
                <div class="col-md-6">
                    <div class="single__news">
                        <div class="thumb">
                            <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>">
                                <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="<?php echo $row->tulisan_judul;?>">
                            </a>
                            <span class="badge"><?php echo $row->tulisan_kategori_nama;?></span>
                        </div>
                        <div class="news_info">
                            <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>">
                                <h4><?php echo $row->tulisan_judul;?></h4>
                            </a>
                            <p><?php echo limit_words($row->tulisan_isi,10).'...';?></p>
                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> <?php echo $row->tanggal;?></span> 
                            
                            <span> <i class="flaticon-comment"></i> 01 comments</span>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
                
            </div>
        </div>
    </div>
    <!--/ service_area_start  -->

    <!-- popular_program_area_start  -->
    <div class="popular_program_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>Pengumuman Sekolah</h3>
                    </div>
                </div>
            </div>
            
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        
                        
                
                
                        <?php foreach ($pengumuman->result() as $row) :?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/program/1.png" alt="">
                                </div>
                                <div class="program__content">
                                    <span><?php echo $row->tanggal;?></span>
                                    <h4><a href="<?php echo site_url('pengumuman');?>"><?php echo $row->pengumuman_judul;?></a></h4>
                                    <p><?php echo limit_words($row->pengumuman_deskripsi,10).'...';?></p>
                                    <a href="<?php echo site_url('pengumuman');?>" class="boxed-btn5">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                        
                        
                        
                    </div>
                </div>
                
                
                
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="course_all_btn text-center">
                        <a href="<?php echo site_url('pengumuman');?>" class="boxed-btn4">Lihat Semua Pengumuman</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popular_program_area_end -->

    <!-- latest_coures_area_start  -->
    
    <!--/ latest_coures_area_end -->

    <!-- recent_event_area_strat  -->
    <div class="recent_event_area section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">Agenda Sekolah</h3>
                        
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    
                    
                    <?php foreach ($agenda->result() as $row):?>
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span><?php echo date("d", strtotime($row->agenda_tanggal));?></span>
                            <p><?php echo date("M. y", strtotime($row->agenda_tanggal));?></p>
                        </div>
                        <div class="event_info">
                            <a href="<?php echo site_url('agenda');?>">
                                <h4><?php echo $row->agenda_nama;?></h4>
                             </a>
                            <p><?php echo limit_words($row->agenda_deskripsi,10).'...';?></p>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
    