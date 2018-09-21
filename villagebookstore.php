<?php
/**
 * 
 * Template Name: Village Bookstore Template  
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
	<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
	<div class="fifth village-widgets">
		<?php dynamic_sidebar( 'sidebar-5' ); ?>
	</div><!-- .fifth -->
	<?php endif; ?>

<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
	<div class="sixth village-widgets">
		<?php dynamic_sidebar( 'sidebar-6' ); ?>
	</div><!-- .sixth -->
	<?php endif; ?>
<?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>
	<div class="seventh village-widgets">
		<?php dynamic_sidebar( 'sidebar-7' ); ?>
	</div><!-- .seventh -->
	<?php endif; ?>

	

</div><!-- #secondary -->



<?php get_footer(); ?>