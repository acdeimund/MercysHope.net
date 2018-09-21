<?php

get_header();

if(have_posts()):
    while(have_posts()): 
    the_post();?>
<div class = 'page_content clearfix'><?php the_content(); ?></div>
    <?php endwhile;
endif;

wp_reset_postdata();

get_footer();