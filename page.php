<!-- initialing home template -->
<?php 
    /* 
        Template Name: Simple Page 
        Template Post Type: page
    */ 
?>
<!-- linking header -->
<?php get_header() ?>

<!-- @@@@@@@@@@MainPageContent@@@@@@@@@@ -->
<div class="container-fluid mt-5">
<div id="primary" class="content-area mt-5">
    <main id="main" class="site-main">
        <?php
        // Start the loop.
        while (have_posts()) :
            the_post();

            // Display the page content.
            the_content();

        // End the loop.
        endwhile;
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

</div>
<?php get_footer() ?>