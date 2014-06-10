<?php
/**
 * @package Secure_Cookie
 * @version 1.0.1
 */
/*
Plugin Name: Secure Cookie
Plugin URI: https://github.com/agrady42/secure-cookie
Description: Marks wordpress_logged_in cookie as Secure if using https
Auther: Andrew Grady
Version: 1.0.1
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
