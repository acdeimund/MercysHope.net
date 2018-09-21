<?php

get_header();

$args = array( "posts_per_page" => 0,"post_type" => "home_page_section" );

$home = get_posts( $args );
foreach ( $home as $post ) : setup_postdata( $post ); ?>
    <div class = 'content_section' style = 'background-image: url(<?php the_post_thumbnail_url(); ?>);'>
        <div class = 'content_inner'>
                <hr>
                <h1 class = 'content_title'><?php the_title(); ?></h1>
                <hr>
                <img class = 'content_image' src = '<?php the_post_thumbnail_url(); ?>' alt = 'image description'>
                <div class = 'content'><?php the_content(); ?></div>
        </div>
    </div>
<?php endforeach; 

wp_reset_postdata();

get_footer();