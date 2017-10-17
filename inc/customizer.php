<?php
/**
 * one-eighty-church Theme Customizer
 *
 * @package one-eighty-church
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
 add_filter( 'page_template', 'staff_bios' );
 function staff_bios( $page_template )
 {
     if ( is_page( 'pastor-sam' ) ) {
         $page_template = get_template_directory() . '/staff-bios/page-pastor-sam.php';
     } else if ( is_page( 'pastor-lydia' ) ) {
         $page_template = get_template_directory() . '/staff-bios/page-pastor-lydia.php';
     } else if ( is_page( 'sarah-bennett' ) ) {
         $page_template = get_template_directory() . '/staff-bios/page-sarah-bennett.php';
     } else if ( is_page( 'charles-bennett' ) ) {
         $page_template = get_template_directory() . '/staff-bios/page-charles-bennett.php';
     } else if ( is_page( 'henry-kim' ) ) {
         $page_template = get_template_directory() . '/staff-bios/page-henry-kim.php';
     } else if ( is_page( 'stu-still' ) ) {
         $page_template = get_template_directory() . '/staff-bios/page-stu-still.php';
     } else if ( is_page( 'pastor-billy' ) ) {
         $page_template = get_template_directory() . '/staff-bios/page-pastor-billy.php';
		 }
     return $page_template;
 }

function one_eighty_church_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'one_eighty_church_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'one_eighty_church_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'one_eighty_church_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function one_eighty_church_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function one_eighty_church_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function one_eighty_church_customize_preview_js() {
	wp_enqueue_script( 'one-eighty-church-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'one_eighty_church_customize_preview_js' );
