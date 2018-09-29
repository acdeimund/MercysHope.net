<!--

This page handles the front page and is supposed to be the default template.
It displays the "home page" sections, but doesn't correctly display other content.
It really should be called "front-page.php" but when I created this site, I didn't know about that!

--->


<?php
/* Uses Bootstrap 4 grids */
get_header(); ?>
<div class = "container-fluid">
<?php $args = array( "posts_per_page" => 0,"post_type" => "home_page_section" );

$home = get_posts( $args );

/*

The counter is used to alternate the pictures back and forth.
The pictures on the desktop version of the site are set as
div backgrounds so they display properly.

*/

$counter = 0;
foreach ( $home as $post ) : setup_postdata( $post );
  if ($counter%2 == 0) : ?>
    <div class = 'row content-row'>
        <div class = 'content_inner col-md-7 col-lg-8'>

                <h1 class = 'content_title'><?php the_title(); ?></h1>

                <img class = 'content_image' src = '<?php the_post_thumbnail_url(); ?>' alt = 'image description'>
                <div class = 'content'><?php the_content(); ?></div>
        </div>
       <div class = 'desktop-image col-md-5 col-lg-4'style = 'background-image: url(<?php the_post_thumbnail_url(); ?>); background-size: cover; background-position: center;'>

      </div>
    </div>
  <?php else: ?>
      <div class = 'row content-row'>
              <div class = 'desktop-image col-md-5 col-lg-4'style = 'background-image: url(<?php the_post_thumbnail_url(); ?>); background-size: cover; background-position: center;'>

      </div>
        <div class = 'content_inner col-md-7 col-lg-8'>

                <h1 class = 'content_title'><?php the_title(); ?></h1>

                <img class = 'content_image' src = '<?php the_post_thumbnail_url(); ?>' alt = 'image description'>
                <div class = 'content'><?php the_content(); ?></div>
        </div>

    </div>
  <?php endif;
  $counter++;
 endforeach; ?>
</div>
<?php wp_reset_postdata();

get_footer();
