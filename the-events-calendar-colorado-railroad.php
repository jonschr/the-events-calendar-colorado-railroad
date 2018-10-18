<?php
/*
	Plugin Name: The Events Calendar Colorado Railroad customizations
    Description: An addon for Modern Tribe's "The Events Calendar" which adds required functionality and styles for the Colorado Railroad site
	Version: 0.1.0
    Author: Jon Schroeder
    Author URI: https://elod.in

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.
*/


/* Prevent direct access to the plugin */
if ( !defined( 'ABSPATH' ) ) {
    die( "Sorry, you are not allowed to access this page directly." );
}

// Plugin directory
define( 'TEC_RAILROAD', dirname( __FILE__ ) );

// Define the version of the plugin
define ( 'TEC_RAILROAD_VERSION', '0.1.0' );

//* Enqueue Scripts and Styles
add_action( 'wp_enqueue_scripts', 'tecrailroad_enqueue_scripts_styles' );
function tecrailroad_enqueue_scripts_styles() {

    //* Don't add these scripts and styles to the admin side of the site
    if ( is_admin() )
		return;

    //* Enqueue main style
    wp_enqueue_style( 'tecrailroad-styles', plugin_dir_url( __FILE__ ) . 'css/tecrailroad-styles.css', array(), TEC_RAILROAD_VERSION, 'screen' );

    //* Google maps scrollfix
    // wp_register_script( 'google-maps-scrollfix', plugin_dir_url( __FILE__ ) . 'js/google-maps-scrollfix.js', array( 'jquery' ), TEC_RAILROAD_VERSION, true );

}