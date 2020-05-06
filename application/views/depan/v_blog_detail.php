<?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>

<section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="<?php echo base_url().'assets/images/'.$image?>" alt="<?php echo $title;?>">
                  </div>
                  <div class="blog_details">
                     <h2><?php echo $title;?>
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i> <?php echo $kategori;?></a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> <?php echo $author;?></a></li>
                     </ul>
                     <?php echo $blog;?>
                     
                     
                  </div>
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