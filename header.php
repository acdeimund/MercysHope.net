<!DOCTYPE html>
<html lang = <?php language_attributes(); ?>>
    <head>
        <meta charset = '<?php bloginfo("charset"); ?>'>
        <meta name = 'viewport' content = 'width = device-width, initial-scale = 1.0'>
        <title><?php bloginfo("name"); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header>
            <div id = 'scrolled_nav'>
                <a href = '<?php echo get_site_url(); ?>'><img id = 'scrolled_logo' src = '<?php echo get_template_directory_uri(); ?>/Images/Logo.png' alt = "Mercy's Hope"></a>
                <img class = 'minimized_menu' src = '<?php echo get_template_directory_uri(); ?>/Images/Minimized_menu.png' alt = 'Menu'>
                <div id = 'scrolled_header_nav'>
                    <?php wp_nav_menu($menu_args); ?>
                </div>
            </div>
            <nav>
                <a href = '<?php echo get_site_url(); ?>'><img id = 'logo' src = '<?php echo get_template_directory_uri(); ?>/Images/Logo.png' alt = "Mercy's Hope"></a>
                <img class = 'minimized_menu' src = '<?php echo get_template_directory_uri(); ?>/Images/Minimized_menu.png' alt = 'Menu'>
                <div id = 'header_nav'>
                    <?php
                    $menu_args = array(
                        "theme_location" => "primary"
                    );
                    wp_nav_menu($menu_args);
                    ?>
                </div>
            </nav>
            <?php if (is_home()) { ?>
                <div id = 'header_image'>
                    <h2 class = 'tagline'><?php bloginfo("description"); ?></h2>
                    <div id = 'child_pic_gallery'>
                        <?php
                        $args = array("posts_per_page" => 4, "post_type" => "child_sponsorship", "orderby" => "rand");
                        $home = get_posts($args);
                        foreach ($home as $post) : setup_postdata($post);
                            ?>

                            <div class = 'child_pic_background'>
                              <a href = "http://mercyshope.net/child-sponsorship/">  
                              	<div class = 'child_pic_event'>
                                    <div class = 'name'><p><?php echo the_title(); ?></p></div>
                                    <img class = 'child_pic' src = '<?php the_post_thumbnail_url(); ?>' alt = '<?php echo the_title(); ?>'>
                                </div>
                              </a>
                            </div>

                            <?php
                        endforeach;
                        wp_reset_postdata();
                        ?>

                    </div>
                </div>
                <?php
            }else {
                ?>
                <div id ='top_spacer'></div>
                <img id = 'page_header' src='<?php header_image(); ?>' alt='Header Image' />
            <?php } ?>
        </header>