<?php
/*
Plugin Name: SimpleSplash
Plugin URI: http://wordpress.org/extend/plugins/
Description: Shows a SplashScreen to visitors who enter the websites in their Browser or come from another site by referer. The SplashScreen appears only at the frontpage.
Author: Thomas La&szlig;
Author URI: http://www.itemis.de
Version: 0.2.1


This file is part of SimpleSplash.

SimpleSplash is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

SimpleSplash is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with SimpleSplash.  If not, see <http://www.gnu.org/licenses/>.

*/

$plugin_dir = basename(dirname(__FILE__));
load_plugin_textdomain( 'simplesplash', null, $plugin_dir );

class simplesplash {

	/**
	 * Constructor
	 */
	function simplesplash() {
		
		// Check the relation between the referer and WordPress-Home-Url.
		// Also the requested URL should be the WordPress-Startpage.
		
		if( (strpos($_SERVER['HTTP_REFERER'], get_bloginfo('home')) === false) && 
		        get_bloginfo('wpurl').'/' == 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'])
		add_action('send_headers', array('simplesplash', 'display_splash'));
		
	}


	/**
	 * Display the splash screen if its enabled
	 */
	function display_splash() {
		
		$filename = 'splash.php';
		$themepath = get_theme_root().'/'.get_template();
		
		if(is_file($themepath.'/'.$filename)) {
		  @include($themepath.'/'.$filename);
		}else {
		  @include(dirname(__FILE__).'/'.$filename);
		}
		exit();
	}
}


$splash = new simplesplash;
?>