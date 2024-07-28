<?php
/**
 * Plugin Name: Enable WP Default Themes
 */

// Add wp-content/themes to the list of directories that WordPress will look for themes in.
// Feel free to remove if you have a custom theme directory and don't want to use the default themes.
if ( ! defined( 'WP_DEFAULT_THEME' ) ) {
	register_theme_directory( ABSPATH . 'wp-content/themes' );
}
