<?php
/**
 * Plugin Name: Customizations
 * Plugin URI:  https://coderve.com/
 * Description: Contains site-specific custom code.
 * Author:      Aryan Raj
 * Author URI:  https://www.aryanraj.com/
 * Version:     1.0.0
 * License:     GPL-2.0+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package Customizations
 */

//* If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
  exit( 'Sorry, you are not allowed to access this file directly.' );
}

//* Includes Additonal functions
//include_once( plugin_dir_path( __FILE__ ) . 'lib/unwanted.php' );
include_once( plugin_dir_path( __FILE__ ) . 'lib/shortcodes.php' );


//* Add Typography Style sheet.
add_action( 'wp_enqueue_scripts', 'enqueue_custom_typography', 1 );
function enqueue_custom_typography() {

  //* local typography
  wp_enqueue_style( 'typography', plugin_dir_url( __FILE__ ) .  'assets/typography/fonts.css', array(), '1.0.0', 'all' );

  //* Typekit style
  //wp_enqueue_style( 'typekit', 'https://use.typekit.net/fjt4joe.css', array(), '1.0.0', 'all' );
}


//* Add Font Icons Style sheet.
add_action( 'wp_enqueue_scripts', 'custom_font_icon_css', 100 );
function custom_font_icon_css() {
	
  //* Display zwicon.
  //wp_enqueue_style( 'zwicon', plugin_dir_url( __FILE__ ) .  'assets/icons/zwicon.css' );
	
}


//* Add Global Style sheets and Scripts.
add_action( 'wp_enqueue_scripts', 'custom_global_styles_scripts', 50 );
function custom_global_styles_scripts() {
  
  //* Display global CSS
  wp_enqueue_style( 'global-style', plugin_dir_url( __FILE__ ) .  'assets/css/global.css', array(), '1.0.0', 'all' );

  //* Display global JS true=in footer false= in header
  //wp_enqueue_script( 'global-script', plugin_dir_url( __FILE__ ) .  'assets/js/global.js', array( 'jquery' ), '1.0.0', false );

}


//* Add Front Page Style sheets and Scripts
add_action( 'wp_enqueue_scripts', 'custom_front_page_styles_scripts', 80 );
function custom_front_page_styles_scripts() {
    
  //if this is not the front page, abort.
  if ( ! is_front_page() ) {
    return;
  }
	
  //* front-page.css
  //wp_enqueue_style( 'front-page-style', plugin_dir_url( __FILE__ ) .  'assets/css/front-page.css', array(), '1.0.0', 'all' );
	
  //* front-page.js
  //wp_enqueue_script( 'front-page-script', plugin_dir_url( __FILE__ ) .  'assets/js/front-page.js', array( 'jquery' ), '1.0.0', true );
	
}
// Add Inline Script in wp_head, if Required.
add_action( 'wp_head', 'init_inline_script_head', 15 );
function init_inline_script_head() {

  ?>

  
  <?php 
  
}

// Add Inline Script in wp_footer, if Required.
add_action( 'wp_footer', 'init_inline_script_footer', 15 );
function init_inline_script_footer() {

  ?>
<script type="text/javascript">



</script>
  
  <?php 
  
}
