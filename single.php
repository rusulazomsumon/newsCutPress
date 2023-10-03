   <!-- linking Header -->
   <?php get_header() ?>

     
   <!--================Blog Area =================-->
   <section class="container-fluid">
      <div class="container">
         <div class="row" >
            <div class="col-md-12 col-10">
                
               <div class="single-post">
                  <!-- <div class="pt-5 feature-img test-center">
                     <img class="img-fluid" style="text-align:center?" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_post_thumbnail_caption(); ?>">
                  </div> -->
                  <div class="blog_details">
                     <h2 class="pt-3" style="font-family: 'kalpurush', Arial, sans-serif !important; color: #000000;  font-size: 3em;"><?php the_title(); ?></h2>
                     <ul class="blog-info-link mt-3 mb-4" style="list-style-type: none;">
                        <li>
                           <?php
                                 $author_id = $post->post_author; 
                                 $author_url = get_the_author_meta('user_url',$author_id);
                                 $author_name =  get_the_author_meta('display_name', $author_id); 
                              ?>
                           
                        </li>
                     </ul>
                     <!-- blog content -->
                     <div class="content" style="font-family: 'kalpurush', Arial, sans-serif !important; color: #000000;  font-size: 1.8em;">
                         <?php the_content(); ?>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Comments and others area -->
            
      </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->
   <!-- linkig the footer area -->
   <?php get_footer() ?>
