<?php
require get_theme_file_path('/inc/acf.php');
require get_theme_file_path('/inc/custom-post-types.php');
require get_theme_file_path('/inc/main-functions.php');
require get_theme_file_path('/inc/custom-querys.php');
//register custom post type
add_action("init", "elips_post_types");
function elips_files() {
    //wp_enqueue_script('elips-script', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    //wp_enqueue_script('elips-lazyloading-js', get_theme_file_uri('/js/lazyloading.js'), NULL, '1.0', true);
    wp_enqueue_style( "elips-style", get_stylesheet_uri() );
}

    add_action( "wp_enqueue_scripts", elips_files );

function elips_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
}
  
    add_action('after_setup_theme', 'elips_features');