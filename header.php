<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- title will show dynamically -->
    <!-- <title>Consulting HTML-5 Template </title> -->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">



    <!-- for showing wp admint ber in the top -->
    <?php wp_head(); ?>
     <!-- this global used in author info showing in blgo -->
     <?php global $post; ?>
</head>

<body <?php body_class(); ?>>
    <!--@@@@@@@@ Topbar Start@@@@@@@@@ -->
    <div >
        <div class="row navArea align-items-center px-lg-5">
            <div class="col-lg-12 text-center">
                <nav class="col-lg-12 navbar navbar-expand-sm p-0">
                <ul class="col-lg-12 navbar-nav ml-n2">
                    <li class="col-lg-12 nav-item">
                    <a class="nav-link text-body small" style="font-family: 'SolaimanLipi', Arial, sans-serif !important; font-size: 18px !important;" id="banglaDateTime" href="#"> </a>
                    </li>
                </ul>
                </nav>
            </div>
        </div>
        <div class="bk-news">
            <?php 
                get_template_part('template-parts/pertials/content','notice'); 
            ?>
        </div>
        <!-- Logo Area -->
        <div class="row align-items-center bg-white py-3 px-lg-5">
            <div class="col-lg-4 col-sm-12 text-center logo">
                <a href="<?php site_url(); ?>"><?php the_custom_logo(); ?></a>
            </div>
            <div class="col-lg-8 d-none d-lg-block text-center text-lg-right">
                <a href="https://rusulazom.me"><img class="img-fluid" src="https://doiniksongbadchitro.com/wp-content/uploads/2023/06/728x90-rasipm.jpg" alt=""></a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-danger shadow-sm navbar-dark py-2 py-lg-0 px-lg-5">  
            <!-- Button to trigger the mobile menu -->
            <button type="button" class="navbar-toggler col-sm-12" data-toggle="modal" data-target="#mobileMenuModal">
            <span class="navbar-toggler-icon text-center"></span>
            </button>

            <!-- Mobile menu modal -->
            <div class="modal fade" id="mobileMenuModal" tabindex="-1" role="dialog" aria-labelledby="mobileMenuModalLabel" aria-hidden="true">
            <div class="modal-dialog"  role="document">
                <div class="modal-content mt-5" style="background-color: #006a4e !important;">
                    <div class="modal-header">
                        <h5 class="modal-title" style="color: white !important;" id="mobileMenuModalLabel">মেনু</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" >
                        <?php
                        // Display your WordPress main menu here
                        wp_nav_menu(array(
                            'theme_location' => 'primary-menu',
                            'container' => false,
                            'menu_class' => 'mobile-menu',
                        ));
                        ?>
                    </div>
                </div>
            </div>
            </div>


            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav p-3 mr-auto py-0">
                    <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'primary-menu'
                        ));
                    ?>
                </div>
            </div>
             
        </nav>
        <!-- Navbar End -->
        <!-- ###############################Breaking News #################################### -->
        <div class="bk-news">
            <?php 
                get_template_part('template-parts/pertials/content','nHeading'); 
            ?>
        </div>
    </div>
    
 
       