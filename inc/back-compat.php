<?php
/**
 * jcdn back compat functionality
 *
 * Prevents jcdn from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since jcdn 1.0
 */

/**
 * Prevent switching to jcdn on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since jcdn 1.0
 */
function jcdn_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'jcdn_upgrade_notice' );
}
add_action( 'after_switch_theme', 'jcdn_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * jcdn on WordPress versions prior to 4.7.
 *
 * @since jcdn 1.0
 *
 * @global string $wp_version WordPress version.
 */
function jcdn_upgrade_notice() {
	$message = sprintf( __( 'jcdn requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'jcdn' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since jcdn 1.0
 *
 * @global string $wp_version WordPress version.
 */
function jcdn_customize() {
	wp_die( sprintf( __( 'jcdn requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'jcdn' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'jcdn_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since jcdn 1.0
 *
 * @global string $wp_version WordPress version.
 */
function jcdn_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'jcdn requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'jcdn' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'jcdn_preview' );
