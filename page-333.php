<?php
/**
 * Template Name: Sponsorship Page
 *
 * Selectable from a dropdown menu on the edit page screen.
 */

get_header(); ?>

<header id="masthead" class="site-header" role="banner">
<img width="960" alt="" src="http://66.147.244.57/~mercysho/wp-content/uploads/2013/09/header_interior_new-1.png">

</header><!-- #masthead -->
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<div id="primary" class="site-content">
		<div id="content" role="main">
<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>

				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

</div><!-- #content -->
	</div><!-- #primary -->
 
<section id="sponsorship">

<?php 
			/*
			the query and the loop
			http://codex.wordpress.org/Class_Reference/WP_Query
			*/

				$args = array(
							'post_type' 	=> 'sponsorship',
							'post_count'	=> -1,
						);	

				// The Query
				$query = new WP_Query( $args );

				
				
				// The Loop
				if ( $query->have_posts() ) { ?>

					<ul class="children">

					<?php
					// while we have posts lets spit out these fields
					while ( $query->have_posts() ) {
						$query->the_post();  ?>

						<li>

						<?php
						
						if(get_field('image')) : ?>
							
							<img src="<?php the_field('image'); ?>" /></br>
						
						<?php endif; 

						if(get_field('name')) : ?>
							
							<strong>Name:&nbsp</strong><?php the_field('name'); ?></br>
						
						<?php endif; 

						if(get_field('age')) : ?>
							
							<strong>Age:&nbsp</strong><?php the_field('age'); ?></br>
						
						<?php endif; 

						if(get_field('hobby')) : ?>
							
							<?php the_field('hobby'); ?> </br>
						
						<?php endif; 

						if(get_field('page_link')) : ?>
							
							<a href="<?php the_field('page_link'); ?>">Read More</a></br>
						
						<?php endif; ?>

						</li>

					<?php
					} // end while

					echo '</ul>';
					
				} else { 
				// no posts found
				
				}
				/* Restore original Post Data */
				wp_reset_postdata();
	?>


</section>


			


		
<?php get_footer(); ?>