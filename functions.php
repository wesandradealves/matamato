<?php

function remove_menus(){

    global $post;

    remove_menu_page( 'index.php' );                  //Dashboard

    remove_menu_page( 'jetpack' );                    //Jetpack*

    // remove_menu_page( 'edit.php' );                   //Posts

    // remove_menu_page( 'upload.php' );                 //Media

    // remove_menu_page( 'edit.php?post_type=page' );    //Pages

    remove_menu_page( 'edit-comments.php' );          //Comments

    //remove_menu_page( 'themes.php' );                 //Appearance

    // remove_menu_page( 'plugins.php' );                //Plugins

    // remove_menu_page( 'users.php' );                  //Users

    // remove_menu_page( 'tools.php' );                  //Tools

    // remove_menu_page( 'options-general.php' );        //Settings

}   

function wp_before_admin_bar_render() {

    echo '

        <style type="text/css">

            #menu-appearance ul.wp-submenu.wp-submenu-wrap li:not(.wp-submenu-head):not(.hide-if-no-customize),

            #wp-admin-bar-comments,

            #wp-admin-bar-new-content,

            #wp-admin-bar-updates,

            .wp_welcome_panel-hide,

            #wp-admin-bar-wp-logo,

            #wpfooter,

            #footer-upgrade,

            #welcome-panel{

                display: none !important;

            }

        </style>

    ';

}

function regScripts() {
    wp_deregister_script('jquery');
    wp_enqueue_script('vendors', get_template_directory_uri()."/jquery.js",'', '', false);
    wp_enqueue_script('commons', get_template_directory_uri()."/main.js",'','', false);
    wp_enqueue_style('style', get_stylesheet_directory_uri().'/style.css', array(), '', 'all');
}

function disable_default_dashboard_widgets() {



    remove_meta_box('dashboard_right_now', 'dashboard', 'core');

    remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');

    remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');

    remove_meta_box('dashboard_plugins', 'dashboard', 'core');



    remove_meta_box('dashboard_quick_press', 'dashboard', 'core');

    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');

    remove_meta_box('dashboard_primary', 'dashboard', 'core');

    remove_meta_box('dashboard_secondary', 'dashboard', 'core');

}

add_action( 'wp_enqueue_scripts', 'regScripts' );
add_action( 'admin_menu', 'remove_menus' );
add_action('wp_before_admin_bar_render', 'wp_before_admin_bar_render');
add_action('admin_menu', 'disable_default_dashboard_widgets');