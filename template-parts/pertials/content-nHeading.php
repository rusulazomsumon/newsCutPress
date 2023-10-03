
        <!-- Heading dynamification -->
        <div class="container-fluid nHeading"> 
            <div class="ticker"> 
                <div class="title">
                    <h5>শিরোনামঃ</h5>
                </div> 
                <!-- news title -->
                <div class="news">
                    <marquee class="news-content">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'order' => 'DSC',
                            'posts_per_page' => 3,
                        );

                        $query = new WP_Query($args);

                        while ($query->have_posts()) {
                            $query->the_post();
                            ?>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <?php
                            if ($query->current_post + 1 !== $query->post_count) {
                                echo '<span class="earth-icon">&#127760;</span>'; // Add the animated Earth separator
                            }
                        }

                        wp_reset_postdata();
                        ?>
                    </marquee>
                </div>

            </div> 
        </div>
        