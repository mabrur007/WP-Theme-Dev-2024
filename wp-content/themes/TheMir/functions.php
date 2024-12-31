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


    // function for custom post type for "Products"
    if(!function_exists('neogym_service_post')){
        function neogym_service_post(){
            register_post_type('wporg_product',
                array(
                    'labels' => array(
                        'name'          => __('All Products', 'textdomain'),
                        'add_new_item'  => __( 'Add New Product', 'textdomain' ),
                        'singular_name' => __('Product', 'textdomain')
                    ),
                    'public'        => true,
                    'has_archive'   => true,
                )
            );
        }
    }
    add_action('init', 'neogym_service_post');

    // function for custom post type for "Students"
    if(!function_exists('neogym_students')){
        function neogym_students(){
            register_post_type('students',
                array(
                    'labels' => array(
                        'name'                  => __('Students', 'textdomain'),
                        'singular_name'         => __('Student', 'textdomain'),
                        'add_new_item'          => __( 'Add New Student', 'textdomain' ),
                        'not_found'             => __( 'No students available.', 'textdomain' ),
                        'not_found_in_trash'    => __( 'No student in trash.', 'textdomain' ),
                        'set_featured_image'    => __( 'Set student image', 'textdomain' ),
                    ),
                    'public'        => true,
                    'has_archive'   => true,
                    'supports' => array('title', 'editor', 'thumbnail'),
                    'taxonomies' => array('category'),
                )
            );
        }
    }
    add_action('init', 'neogym_students');


    // adding a custom taxonomy for 'neogym_students'
    if(!function_exists('neogym_students_department')){
        function neogym_students_department(){
            $labels = array(
                'name'              => _x( 'Departments', 'textdomain' ),
                'singular_name'     => _x( 'Department', 'textdomain' ),
                'search_items'      => __( 'Search Departments' ),
                'all_items'         => __( 'All Departments' ),
                'parent_item'       => __( 'Parent Department' ),
                'parent_item_colon' => __( 'Parent Department:' ),
                'edit_item'         => __( 'Edit Department' ),
                'update_item'       => __( 'Update Department' ),
                'add_new_item'      => __( 'Add New Department' ),
                'new_item_name'     => __( 'New Department Name' ),
                'menu_name'         => __( 'Department' ),
            );
            $args   = array(
                'hierarchical'      => true, // make it hierarchical (like categories)
                'labels'            => $labels,
                'show_ui'           => true,
                'show_admin_column' => true,
                'query_var'         => true,
                'rewrite'           => [ 'slug' => 'department' ],
            );
            register_taxonomy( 'department', [ 'students', 'wporg_product', 'post' ], $args );
        }
    }
    add_action('init', 'neogym_students_department');


    // adding a custom shortcode

    if(!function_exists('my_custom_shortcode')){
        function my_custom_shortcode(){
            // this line represents the shortcode parameter
            add_shortcode('myWord', 'myWordFunc');
            if(!function_exists('myWordFunc')){
                function myWordFunc(){
                    return '<h4>This is my first shortcode!!</h4>';
                }
            }
        }
    }

    add_action('init', 'my_custom_shortcode');

    function my_custom_form_shortcode(){

        add_shortcode('custom_form', 'custom_form_shortcode');
        function custom_form_shortcode() {
            
            // Start output buffering
            ob_start();
            ?>
            <form action="">
                <label for="fname">First name:</label><br>
                <input type="text" id="fname" name="fname" value="John"><br>
                <label for="lname">Last name:</label><br>
                <input type="text" id="lname" name="lname" value="Doe"><br><br>
                <input type="submit" value="Submit">
            </form>
        
            <?php
            // Capture output and return it
            return ob_get_clean();
        }
    }
    
    add_action('init', 'my_custom_form_shortcode');
    



    // codestar framework option enable here
    require_once get_theme_file_path() .'/inc/codestar-framework/codestar-framework.php';

    require_once get_theme_file_path() .'/inc/codestar-framework/samples/admin-options.php';
?>