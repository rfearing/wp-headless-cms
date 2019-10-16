<?php
/**
 * Register main menu.
 *
 * @package  Ricardo_Car_Headless_CMS
 */

/**
 * Register navigation menu.
 *
 * @return void
 */
function register_menus() {
    register_nav_menu( 'header-menu', __( 'Header Menu', 'rfearing-headless-wp' ) );
}
add_action( 'after_setup_theme', 'register_menus' );
