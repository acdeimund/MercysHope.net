<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<header id="masthead" class="site-header" role="banner">
<img width="960" alt="" src="http://66.147.244.57/~mercysho/wp-content/uploads/2013/09/header_interior_new-1.png">

		

	</header><!-- #masthead -->
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">


	<div id="secondary" class="widget-area" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
	<div class="blog widgets">
		<?php dynamic_sidebar( 'sidebar-4' ); ?>
	</div><!-- .blog-->
	<?php endif; ?>

	
</div><!-- #secondary -->


	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

				<nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->



<?php get_footer(); ?>