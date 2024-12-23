<?php
    
    if(!function_exists('myThemeFunction')){
        function myThemeFunction(){
            add_theme_support( 'post-thumbnails' );
            add_theme_support( 'post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
        
            // this line makes header translateable 
            load_theme_textdomain( 'neogymtextdomain', get_template_directory() . '/languages' );
            
            // WP function to register a nav menu
            register_nav_menus(
                array(
                    'top_menu' => __('Top Menu', 'neogymtextdomain'),
                    'footer_menu' => __('Footer Menu')
                )
            );
        }
    }

    add_action('after_setup_theme', 'myThemeFunction');


    // function for custom post type
    
    if(!function_exists('neogym_service_post')){
        function neogym_service_post(){
            register_post_type('wporg_product',
                array(
                    'labels' => array(
                        'name'          => __('Products', 'textdomain'),
                        'singular_name' => __('Product', 'textdomain')
                    ),
                    'public'        => true,
                    'has_archive'   => true,
                )
            );
        }
    }
    add_action('init', 'neogym_service_post');
    
?>