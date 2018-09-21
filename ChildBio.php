<?php
/**
 * Template Name: Child Bio Template
 *
 * Selectable from a dropdown menu on the edit page screen.
 */

get_header(); ?>

<header id="masthead" class="site-header" role="banner">
<img width="960" alt="" src="http://66.147.244.57/~mercysho/wp-content/uploads/2013/09/header_interior_new-1.png">

</header><!-- #masthead -->
<div id="page" class="hfeed site">
<body <?php body_class(); ?>>

	
<div id="secondary" class="widget-area" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar-8' ) ) : ?>
	<div class="blog widgets">
		<?php dynamic_sidebar( 'sidebar-8' ); ?>
	</div><!-- .blog-->
	<?php endif; ?>

	
</div><!-- #secondary -->


	<div id="primary" class="site-content">
		<div id="content" role="main">

<div id="bios">
<?php
						
						if(get_field('image')) : ?>
							
							<img src="<?php the_field('image'); ?>" /></br>
						
						<?php endif; 

						if(get_field('name')) : ?>
							
							<strong>Name:&nbsp</strong><?php the_field('name'); ?></br>
						
						<?php endif; 

						if(get_field('bio')) : ?>
							
							<strong>About me:&nbsp</strong><?php the_field('bio'); ?></br>
						
						<?php endif; 

						if(get_field('page_link')) : ?>
							
							<a href="<?php the_field('page_link'); ?>">Read More</a></br>
						
						<?php endif; ?>



</div>

		</div><!-- #content -->
	</div><!-- #primary -->	



<?php get_footer(); ?>