<?php
/**
 * Filename: functions.php
 * Project: Plugins Theme
 * Copyright: (c) 2014 Seravo Oy
 * License: The MIT License (MIT) http://opensource.org/licenses/MIT
 *
 * Put your theme functions here. You know what to do.
 */

/*
 * load bootstrap assets
 */
add_action( 'wp_enqueue_scripts', 'load_bootstrap' );
function load_bootstrap () {

  // bootstrap directory path
  $bootstrap_dir = get_template_directory_uri() . '/inc/bootstrap';

  // bootstrap styles
  wp_register_style( 'bootstrap', $bootstrap_dir . '/css/bootstrap.css' );
  wp_enqueue_style( 'bootstrap' );

  // bootstrap scripts
  wp_register_script( 'bootstrap', $bootstrap_dir . '/js/bootstrap.js' , array( 'jquery' ), '', true );
  wp_enqueue_script( 'bootstrap' );
}


/*
 * load theme assets
 */
add_action( 'wp_enqueue_scripts', 'load_theme_assets' );
function load_theme_assets () {

  // theme stylesheets
  wp_register_style( 'default', get_template_directory_uri() . '/css/default.css' );
  wp_enqueue_style( 'default' );

  // theme scripts
  wp_register_script( 'default', get_template_directory_uri() . '/js/default.js' , array( 'jquery' ), '', true );
  wp_enqueue_script( 'default' );
}


/*
 * register navigation menus
 */
register_nav_menus( array(
    'primary' => 'Navigation',
));

/*
 * get number of plugin downloads from wordpress.org
 */
function _get_plugin_downloads( $url ) {

  // parse the number from a wordpress.org profile page

  include('lib/simple_html_dom.php');

  $html = file_get_html($url);
  $spans = $html->find('.downloads');
  $downloads = 0;

  foreach($spans as $span) {
    $span = $span->plaintext;
    $span = substr($span, 0, strpos($span, " downloads"));
    $span = intval(str_replace(',', '', $span));
    $downloads += $span;
  }

  $downloads = number_format($downloads, 0, ',', ' ');

  // save the latest number as an option
  update_option('seravo_plugin_downloads_number', $downloads);

  return $downloads;
}

add_action( 'wp_ajax_get_downloads', 'ajax_get_downloads_handler' );
add_action( 'wp_ajax_nopriv_get_downloads', 'ajax_get_downloads_handler' );

function ajax_get_downloads_handler() {

  echo _get_plugin_downloads($_POST['url']);
	die();

}
