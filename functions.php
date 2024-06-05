<?php

/**
 * Theme Setup
 */

function projectname_theme_setup()
{

  // ## ADD THEME SUPPORTS

  add_theme_support('title-tag');
  add_theme_support('menus');
  add_theme_support('post-thumbnails');


  // ## REGISTER MENU LOCATIONS

  register_nav_menus(
    array(
      'header-menu-primary' => __('Primary', 'projectname'),
      'header-menu-secondary' => __('Secondary', 'projectname'),
      'header-menu-mobile' => __('Mobile', 'projectname'),
    )
  );
  

  // Remove annoying margin-top when logged in
  // add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );

  
  
  // // Disable Gutenberg on the back end.
  // add_filter( 'use_block_editor_for_post', '__return_false' );

  // // Disable Gutenberg for widgets.
  // add_filter( 'use_widgets_block_editor', '__return_false' );

  // add_action( 'wp_enqueue_scripts', function() {

  //     // Remove CSS on the front end.
  //     wp_dequeue_style( 'wp-block-library' );

  //     // Remove Gutenberg theme.
  //     wp_dequeue_style( 'wp-block-library-theme' );

  //     // Remove inline global CSS on the front end.
  //     wp_dequeue_style( 'global-styles' );

  // }, 20 );
  

}
projectname_theme_setup();


// Allow SVG upload
function allow_svg_upload($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');




// Declare woocommerce support
function projectname_add_woocommerce_support() {
  add_theme_support( 'woocommerce', array(
      // 'thumbnail_image_width' => 150,
      // 'single_image_width'    => 300,

      // 'product_grid'          => array(
      //     'default_rows'    => 3,
      //     'min_rows'        => 2,
      //     'max_rows'        => 8,
      //     'default_columns' => 4,
      //     'min_columns'     => 2,
      //     'max_columns'     => 5,
      // ),
  ) );
}

add_action( 'after_setup_theme', 'projectname_add_woocommerce_support' );




/**
 * Register and Enqueue Styles.
 */

function projectname_register_styles()
{


  wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(),  rand(0,9999), 'all');
  wp_enqueue_style('stylesheet');
}

add_action('wp_enqueue_scripts', 'projectname_register_styles', 9999999999);



/**
 * Register and Enqueue Scripts.
 */

function projectname_register_scripts()
{


  wp_register_script('main-js', get_template_directory_uri() . '/js/app.js', '',  rand(0,9999), true);
  wp_enqueue_script('main-js');
}

add_action('wp_enqueue_scripts', 'projectname_register_scripts', 9999999999);







// ******************** Clean up WordPress Header START ********************** //

function projectname_remove_version(){
  return '';
}
add_filter('the_generator', 'projectname_remove_version');

remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');


// ******************** Clean up WordPress Header END ********************** //




// ******************** Add custom styles to dashboard START ********************** //

add_action('admin_head', 'admin_custom_css');
function admin_custom_css()
{
  echo '
  <style>
    
    #menu-management .menu-item-bar .menu-item-handle {
      max-width: 100%;
      width: auto;
    }

    #menu-management .menu-item-settings {
      max-width: 100%;
      width: auto;
    }

    .metabox-location-normal .postbox {
      margin: 10px;
    }

    .ui-sortable .acf-row > .acf-fields {
      border-bottom: 5px solid rgba(0,0,0,0.25);
    }

    /* .ui-sortable [data-width] .acf-fields {
      border-bottom-color: transparent;
    } */

  </style>';
}

// ******************** Add custom styles to dashboard END ********************** //



// Fix HTML for CF7

/**
 * Remove p tag from cf7
 */
// add_filter('wpcf7_autop_or_not', '__return_false');

/**
 * Remove cf7 styles
 */
// add_action( 'wpcf7_enqueue_styles', function() { wp_deregister_style( 'contact-form-7' ); } );




// ******************** ACF options pages START ********************** //

if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title'    => 'Theme Settings',
    'menu_title'    => 'Theme Settings',
    'menu_slug'     => 'theme-settings',
    'capability'    => 'edit_posts',
    'redirect'      => false
  ));

}

// ******************** ACF options pages END ********************** //





// ******************** Elementor related functions START ********************** //

// Custom Elementor Widgets.
require_once get_template_directory() . '/inc/projectname-widgets/projectname-widgets.php';

// ******************** Elementor related functions END ********************** //







// // Disable SRCSET for images

// function remove_max_srcset_image_width( $max_width ) {
//   return false;
//  }
//  add_filter( 'max_srcset_image_width', 'remove_max_srcset_image_width' );
//  function wdo_disable_srcset( $sources ) {
//   return false;
//  }
//  add_filter( 'wp_calculate_image_srcset', 'wdo_disable_srcset' );



// MENU WALKERS
// require_once get_template_directory() . '/inc/walker-primary.php';

