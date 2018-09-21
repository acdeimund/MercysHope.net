<?php

/* * ** Load resources *** */

function load_theme_resources() {
  //load the fonts used from google  
  wp_enqueue_style("google_fonts", "https://fonts.googleapis.com/css?family=Artifika|Sue+Ellen+Francisco");
  
  // loads bootstrap scripts and dependancies
	wp_enqueue_script( 'popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), null, true );
	wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.2.1.slim.min.js', array(), null, true );
	wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' );
	wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
  
  //load theme resources
  wp_enqueue_script("scripts", get_template_directory_uri() . "/scripts.js");
  wp_enqueue_style("style", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "load_theme_resources");

/* * ** Add theme support *** */

function setup() {
    // Featured image support
    add_theme_support("post-thumbnails");
    // Custom header support
    add_theme_support("custom-header");
    // Adds support for custom background and sets default color
    $args = array(
        'default-color' => '#ffd'
    );
    add_theme_support('custom-background', $args);
    // Menu support
    register_nav_menus(array(
        "primary" => __("Primary Menu")
    ));
}

add_action("after_setup_theme", "setup");
$args = array(
    'default-color' => '#ffd'
);
add_theme_support('custom-background', $args);
/* * ** Custom Post Types *** */

function home_section_post_type() {
    $labels = array(
        "name" => "Home Page",
        "singular_name" => "Home Page Section",
        "add_new" => "Add Section",
        "all_items" => "All Sections",
        "add_new_item" => "Add Section",
        "edit_item" => "Edit Section",
        "new_item" => "New Section",
        "view_item" => "View Section",
        "search_item" => "Search Home Page Sections",
        "not_found" => "Sorry, nothing found",
        "not_found_in_trash" => "Sorry, nothing found in trash",
        "parent_item_colon" => "Parent Section"
    );
    $support = array(
        "title",
        "editor",
        "revisions",
        "thumbnail"
    );
    $args = array(
        "labels" => $labels,
        "public" => true,
        "has_archive" => false,
        "publicly_queryable" => true,
        "query_var" => true,
        "rewrite" => true,
        "capability_type" => "post",
        "hierarchical" => false,
        "supports" => $support,
        "exclude_from_search" => false,
        "menu_icon" => "dashicons-admin-home"
    );
    register_post_type("home_page_section", $args);
}

add_action("init", "home_section_post_type");

function child_sponsorship_post_type() {
    $labels = array(
        "name" => "Child Sponsorship",
        "singular_name" => "Child Sponsorship",
        "add_new" => "Add Child",
        "all_items" => "All Children",
        "add_new_item" => "Add Child",
        "edit_item" => "Edit Child",
        "new_item" => "New Child",
        "view_item" => "View Child",
        "search_item" => "Search Child Sponsorships",
        "not_found" => "Sorry, nothing found",
        "not_found_in_trash" => "Sorry, nothing found in trash"
    );
    $support = array(
        "title",
        "editor",
        "revisions",
        "thumbnail"
    );
    $args = array(
        "labels" => $labels,
        "public" => true,
        "has_archive" => false,
        "publicly_queryable" => true,
        "query_var" => true,
        "rewrite" => true,
        "capability_type" => "post",
        "hierarchical" => false,
        "supports" => $support,
        "exclude_from_search" => false,
        "menu_icon" => "dashicons-universal-access"
    );
    register_post_type("child_sponsorship", $args);
}

add_action("init", "child_sponsorship_post_type");

function college_sponsorship_post_type() {
    $labels = array(
        "name" => "College Sponsorship",
        "singular_name" => "College Sponsorship",
        "add_new" => "Add Child",
        "all_items" => "All Children",
        "add_new_item" => "Add Child",
        "edit_item" => "Edit Child",
        "new_item" => "New Child",
        "view_item" => "View Child",
        "search_item" => "Search College Sponsorships",
        "not_found" => "Sorry, nothing found",
        "not_found_in_trash" => "Sorry, nothing found in trash"
    );
    $support = array(
        "title",
        "editor",
        "revisions",
        "thumbnail"
    );
    $args = array(
        "labels" => $labels,
        "public" => true,
        "has_archive" => false,
        "publicly_queryable" => true,
        "query_var" => true,
        "rewrite" => true,
        "capability_type" => "post",
        "hierarchical" => false,
        "supports" => $support,
        "exclude_from_search" => false,
        "menu_icon" => "dashicons-welcome-learn-more"
    );
    register_post_type("college_sponsorship", $args);
}

add_action("init", "college_sponsorship_post_type");
