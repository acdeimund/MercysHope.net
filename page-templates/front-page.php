<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>


	<header id="masthead" class="site-header" role="banner">
<img width="960" height="362" alt="" src="http://66.147.244.57/~mercysho/wp-content/uploads/2013/09/header_bottom_BIG1-1.png">

		

	</header><!-- #masthead -->
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<div id="main" class="wrapper">


<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) : ?>
					
				<?php endif; ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
</div>	
		</div><!-- #content -->
	</div><!-- #primary -->
<div id="secondary" class="widget-area" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<div class="first front-widgets">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div><!-- .first -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	<div class="second front-widgets">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>


	</div><!-- .second -->
	<?php endif; ?>
</div><!-- #secondary -->


<?php get_footer(); ?>