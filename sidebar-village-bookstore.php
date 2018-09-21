<?php
/**
 * The sidebar containing the village bookstore widget areas.
 *
 * If no active widgets in either sidebar, they will be hidden completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

/*
 * The front page widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */
if ( ! is_active_sidebar( 'sidebar-5' ) && ! is_active_sidebar( 'sidebar-6' ) && ! is_active_sidebar( 'sidebar-7' ) )
	return;

// If we get this far, we have widgets. Let do this.
?>