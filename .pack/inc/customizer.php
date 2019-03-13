<?php
/**
 * Vertex Theme Customizer
 *
 * @package Vertex
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vertex_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.branding__name',
			'render_callback' => 'vertex_customize_partial_blogname',
		) );
	}
}
add_action( 'customize_register', 'vertex_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function vertex_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function vertex_customize_preview_js() {
	wp_enqueue_script( 'vertex-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'vertex_customize_preview_js' );

/**
 * Remove Customizer sections.
 *
 * @uses vertex_header_style()
 */
function vertex_customer_header_image_setup( $wp_customize ) {
    $wp_customize->remove_section( 'header_image' );
    $wp_customize->remove_section( 'background_image' );
}
add_action( 'customize_register', 'vertex_customer_header_image_setup' );
