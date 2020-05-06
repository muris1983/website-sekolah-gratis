<?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
<div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Kumpulan Berita Sekolah</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

<section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        
                        
              <?php echo $this->session->flashdata('msg');?>
              
                
              
                
            
                        
                        <?php foreach ($data->result() as $row) : ?>
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="<?php echo $row->tulisan_judul;?>">
                                <a href="#" class="blog_item_date">
                                    <h3><?php echo $row->tanggal;?></h3>
                                    <p></p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>">
                                    <h2><?php echo $row->tulisan_judul;?></h2>
                                </a>
                                <?php echo limit_words($row->tulisan_isi,10).'...';?>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> <?php echo $row->tulisan_kategori_nama;?></a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> <?php echo $row->tulisan_author;?></a></li>
                                </ul>
                            </div>
                        </article>
                        <?php endforeach;?>
                        

                        

                        

                        
                        <nav class="blog-pagination justify-content-center d-flex">
                    <?php error_reporting(0); echo $page;?>
                </nav>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            
                            
                                
                            <h3 class="widget_title">Cari Berita</h3>
                            
                            <form action="<?php echo site_url('blog/search');?>" method="get">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" name="keyword" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'" autocomplete="off" required>
                                        <div class="input-group-append">
                                            <button class="btn" type="submit"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button>
                            </form>
                            
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Kategori Berita</h4>
                            <ul class="list cat-list">
                                
                                <?php foreach ($category->result() as $row) : ?>
                      <li><a href="<?php echo site_url('blog/kategori/'.str_replace(" ","-",$row->kategori_nama));?>" class="d-flex"><?php echo $row->kategori_nama;?></a></li>
                    <?php endforeach;?>
                                
                                
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Postingan Populer</h3>
                            
                            
                      
                    
                            
                            <?php foreach ($populer->result() as $row) :?>
                            <div class="media post_item">
                                <img width="35%" class="img-fluid" src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="post">
                                <div class="media-body">
                                    <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>">
                                        <h3><?php echo limit_words($row->tulisan_judul,3).'...';?></h3>
                                    </a>
                                    <p><?php echo limit_words($row->tulisan_isi,5).'...';?></p>
                                </div>
                            </div>
                            <?php endforeach;?>
                            
                            
                        </aside>
                        


                        


                        
                    </div>
                </div>
            </div>
        </div>
    </section>