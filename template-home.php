<!-- initialing home template -->
<?php 
    /* 
        Template Name: Run Bangla24 
        Template Post Type: page
    */ 
?>
<!-- linking header -->
<?php get_header() ?>

<!-- M$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$((((((((((((Main News Slider Start)))))))))))))))) $$$$$$$$$$$$$$$$$$$$$$$$$-->
<div class="container-fluid">   
     <div class="row">
            <div class="col-lg-7 px-0">
                <div class="owl-carousel main-carousel position-relative">
                    <!-- post dynamicication -->
                <?php 
                        $args = array(
                            'post_type' => 'post',
                            'order' => 'DSC',
                            'posts_per_page' => 5
                        );
                        $query = new WP_Query($args);
                        while($query -> have_posts()){
                            $query->the_post();
                            ?>
                            <!-- Single News  markup -->
                    <!-- single post start: slider -->
                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <img class="img-fluid h-100" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_caption($post); ?>" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href=""><span>
                                            <?php  
                                                $catgs = get_the_category();
                                                foreach($catgs as $catg){
                                                    echo $catg -> name."  ";
                                                }
                                            ?>
                                        </span></a>
                                <a class="text-white" href=""><?php the_date(); ?></a>
                            </div>
                            <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="<?php the_permalink(); ?>">
                                <?php the_title(); ?></a>
                        </div>
                    </div>
                    <!-- single post end: slider -->
                    <!-- rest of loop -->
                    <?php
                        }
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
            <!-- *********************main post slider end*************** -->
    <!-- #################################### image box post ########################################## -->
            <!-- Showing form template parts NingBox -->
            <?php get_template_part('template-parts/pertials/content','NimgBox'); ?>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- ###############################Breaking News #################################### -->
    <?php get_template_part('template-parts/pertials/content','bknews'); ?>
    <!-- Breaking News End -->

    <!-- ###############################Feture News #################################### -->

    <!-- Featured News Slider Start -->
    <!-- Showing form template parts fetNews -->
    <?php get_template_part('template-parts/pertials/content','fetNews'); ?>
    <!-- Featured News Slider End -->

    <!-- ###############################Leatest News #################################### -->

    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%Body News Row 1%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
                    <div class="row">
                     <!-- ******3333333333333******** leatest single news international *******33333333333333**** -->
                        <div class="col-lg-6">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">দেশ জনপদের খবর</h4>
                            </div>
                            <?php 
                                $args = array(
                                    'post_type'     =>  'post',
                                    'order'         =>  'ASC',
                                    'category_name' =>  'দেশ-ও-জনপদের-খবর',
                                    'post_per_page' =>  4
                                );
                                $query = new WP_Query($args);
                                while($query -> have_posts()){
                                    $query -> the_post();
                            ?>
                            <!-- single post markup -->
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="<?php the_post_thumbnail_url(); ?>" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">
                                            <span>
                                                <?php  
                                                    $catgs = get_the_category();
                                                    foreach($catgs as $catg){
                                                        echo $catg -> name." ";
                                                    }
                                                ?>
                                            </span>
                                        </a>
                                        <a class="text-body" href="#"><small><?php the_date(); ?></small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    <p class="m-0"><?php the_excerpt() ?></p>
                                </div>
                            </div>
                            <!-- single post markup: end -->
                                <!-- end of loop -->
                            <?php
                                }
                            ?>
                        </div>
                        <!-- #####33333333333333333333######## leatest soprts  news ########333333333333333333333333#### -->
                        <div class="col-lg-6">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">খেলাধুলা</h4>
                            </div>
                            <?php 
                                $args = array(
                                    'post_type'     =>  'post',
                                    'order'         =>  'DSC',
                                    'category_name' =>  'খেলার-খবর',
                                    'post_per_page' =>  3
                                );
                                $query = new WP_Query($args);
                                while($query -> have_posts()){
                                    $query -> the_post();
                            ?>
                             <!-- single post markup -->
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="<?php the_post_thumbnail_url(); ?>" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">
                                            <span>
                                                <?php  
                                                    $catgs = get_the_category();
                                                    foreach($catgs as $catg){
                                                        echo $catg -> name." ";
                                                    }
                                                ?>
                                            </span>
                                        </a>
                                        <a class="text-body" href="#"><small><?php the_date(); ?></small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    <p class="m-0"><?php the_excerpt() ?></p>
                                </div>
                            </div>
                            <!-- single post markup: end -->
                                <!-- end of loop -->
                            <?php
                                }
                            ?>
                        </div>
                        <!-- Adverticement -->
                        <div class="col-lg-12">
                            <a href="https://htmlcodex.com"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/ads-728x90.png" alt=""></a>
                        </div>
                    </div>
                    <!-- %%%%%%%%%%%%%%%%%%%%%NewsRow2%%%%%%%%%%%%%%%%%%%%5 -->
                    <div class="row">
                     <!-- ******3333333333333******** leatest single news international *******33333333333333**** -->
                        <div class="col-lg-4">
                            <div class="section-title">
                                <h5 class="m-0 text-uppercase font-weight-bold">নাগরিক প্রতিবেদন</h5>
                            </div>
                            <?php 
                                $args = array(
                                    'post_type'     =>  'post',
                                    'order'         =>  'DSC',
                                    'category_name' =>  'নাগরিক-প্রতিবেদন',
                                    'post_per_page' =>  2
                                );
                                $query = new WP_Query($args);
                                while($query -> have_posts()){
                                    $query -> the_post();
                            ?>
                            <!-- single post markup -->
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="<?php the_post_thumbnail_url(); ?>" width="250" height="150" style="object-fit: auto;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">
                                            <span>
                                                <?php  
                                                    $catgs = get_the_category();
                                                    foreach($catgs as $catg){
                                                        echo $catg -> name." ";
                                                    }
                                                ?>
                                            </span>
                                        </a>
                                        <a class="text-body" href="#"><small><?php the_date(); ?></small></a>
                                    </div>
                                    <a class="h6 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                            </div>
                            <!-- single post markup: end -->
                                <!-- end of loop -->
                            <?php
                                }
                            ?>
                        </div>
                        <!-- #####33333333333333333333######## leatest soprts  news ########333333333333333333333333#### -->
                        <div class="col-lg-4">
                            <div class="section-title">
                                <h5 class="m-0 text-uppercase font-weight-bold">নির্বাচন</h5>
                            </div>
                            <?php 
                                $args = array(
                                    'post_type'     =>  'post',
                                    'order'         =>  'DSC',
                                    'category_name' =>  'নির্বাচন',
                                    'post_per_page' =>  2
                                );
                                $query = new WP_Query($args);
                                while($query -> have_posts()){
                                    $query -> the_post();
                            ?>
                             <!-- single post markup -->
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="<?php the_post_thumbnail_url(); ?>" width="250" height="150" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">
                                            <span>
                                                <?php  
                                                    $catgs = get_the_category();
                                                    foreach($catgs as $catg){
                                                        echo $catg -> name." ";
                                                    }
                                                ?>
                                            </span>
                                        </a>
                                        <a class="text-body" href="#"><small><?php the_date(); ?></small></a>
                                    </div>
                                    <a class="h6 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                            </div>
                            <!-- single post markup: end -->
                                <!-- end of loop -->
                            <?php
                                }
                            ?>
                        </div>
                        <!-- #####33333333333333333333######## leatest business  news ########333333333333333333333333#### -->
                        <div class="col-lg-4">
                            <div class="section-title">
                                <h5 class="m-0 text-uppercase font-weight-bold">বাণিজ্য-বার্তা</h5>
                            </div>
                            <?php 
                                $args = array(
                                    'post_type'     =>  'post',
                                    'order'         =>  'DSC',
                                    'category_name' =>  'বাণিজ্য-বার্তা',
                                    'post_per_page' =>  2
                                );
                                $query = new WP_Query($args);
                                while($query -> have_posts()){
                                    $query -> the_post();
                            ?>
                             <!-- single post markup -->
                            <div class="position-relative mb-3">
                                <img class="img-fluid " src="<?php the_post_thumbnail_url(); ?>" width="250" height="150" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">
                                            <span>
                                                <?php  
                                                    $catgs = get_the_category();
                                                    foreach($catgs as $catg){
                                                        echo $catg -> name." ";
                                                    }
                                                ?>
                                            </span>
                                        </a>
                                        <a class="text-body" href="#"><small><?php the_date(); ?></small></a>
                                    </div>
                                    <a class="h6 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                            </div>
                            <!-- single post markup: end -->
                                <!-- end of loop -->
                            <?php
                                }
                            ?>
                        </div>
                        <!-- Adverticement -->
                        <div class="col-lg-12">
                            <a href="https://htmlcodex.com"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/ads-728x90.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
                        @@@@@@@@@@@@@@@@@@@@@@@@@@@@ Right Sidebar @@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
                <div class="col-lg-4">
                    <?php dynamic_sidebar('right-sidebar'); ?>
                </div>
            </div>
            <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%Body News Row 2%%%%%%%%%%%%%%%%%%%%% -->
            
        </div>
    </div>
    <!-- News With Sidebar End -->

<!-- linking Footer -->
<?php get_footer(); ?>