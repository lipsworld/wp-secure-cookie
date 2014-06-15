<?php
/**
 * @package Secure_Cookie
 * @version 1.0.3
 */
/*
Plugin Name: Secure Cookie
Plugin URI: https://github.com/agrady42/wp-secure-cookie
Description: Marks wordpress_logged_in cookie as Secure if using https. Note: this does not enforce https by itself, and does nothing if not using https
Author: Andrew Grady
Version: 1.0.3
Author URI: https://github.com/agrady42
Licence: MIT
 */

function secure_cookie($cookie, $user_id, $secure) {
	if (is_ssl()) {
		return true;
	}
	return false;
}

add_filter('secure_logged_in_cookie', 'secure_cookie', 10, 3);
