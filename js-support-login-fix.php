<?php
/**
 * Plugin Name:     fix_js_support_login
 * Description:     fix_js_support_login
 * Version:         2021.11.19
 * Author:          The WordPress Contributors
 * License:         GPL-2.0-or-later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:     fix_js_support_login
 * Plugin URI:        https://github.com/zzozz/js-support-login-fix
 * GitHub Plugin URI: https://github.com/zzozz/js-support-login-fix
 */

function register_fix_js_support_login() {
	wp_enqueue_script(
		'fix_js_support_login',
		'./js-support-login-fix.js',
		array()
	);
}

add_action( 'wp_enqueue_scripts', 'register_fix_js_support_login' );
