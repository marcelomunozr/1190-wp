<?php
    add_theme_support( 'post-thumbnails' );
    add_image_size('image-tabs', 506, 190, true, array( 'center', 'center' ) );
    
    function register_my_menu() {
      register_nav_menu('header-menu', 'Header Menu');
    }
    add_action( 'init', 'register_my_menu' );
    
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title'    => 'Opciones del sitio',
            'menu_title'    => 'Opciones del sitio',
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }

?>
