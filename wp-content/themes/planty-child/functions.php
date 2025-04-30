<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

add_action( 'wp_enqueue_scripts', 'planty_child_style' );
				function planty_child_style() {
					wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
					wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
				}

/**
 * Your code goes below.
 */

/*--------Admin--------*/
function planty_admin_button_in_menu($items, $args) {
    if (is_user_logged_in() && current_user_can('administrator') && $args->menu == 'main-menu') { 
        $items .= '<li class="button_rencontrer menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-16 current_page_item parent hfe-creative-menu"><a href="' . admin_url() . '" class="admin-button">Admin</a></li>';
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'planty_admin_button_in_menu', 10, 2);
