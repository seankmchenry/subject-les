<?php
/**
 * Customizer Fields
 *
 * @package _s
 */

/**
 * Panels
 */
function _s_customizer_add_panels( $wp_customize ) {
	/* Client Setup */
	$wp_customize->add_panel( 'client_setup', array(
		'capability'	=> 'edit_theme_options',
		'title'			=> 'Client Setup',
	) );
}
add_action( 'customize_register', '_s_customizer_add_panels' );

/**
 * Sections
 */
function _s_customizer_add_sections( $wp_customize ) {
	/* Global Settings */
	$wp_customize->add_section( 'global_settings', array(
		'title'			=> 'Global Settings',
		'description'	=> 'Various site-wide settings can be configured below.',
		'panel'			=> 'client_setup',
		'priority'		=> 1,
	) );

	/* Site Features */
	$wp_customize->add_section( 'social_media', array(
		'title'			=> 'Social Media',
		'description'	=> 'Add links to your social media profiles below.',
		'panel'			=> 'client_setup',
		'priority'		=> 2,
	) );
}
add_action( 'customize_register', '_s_customizer_add_sections' );

/**
 * Fields
 */
function _s_customizer_add_fields( $wp_customize ) {
	/* Global Settings */
	$wp_customize->add_setting( 'analytics_code' );
	$wp_customize->add_control( 'analytics_code', array(
		'label'			=> 'Analytics Code',
		'description'	=> 'Add your Google Analytics ID here to enable page tracking (e.g. UA-000000-01).',
		'section'		=> 'global_settings',
		'type'			=> 'text',
	) );
	$wp_customize->add_setting( 'shortcut_icon' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'shortcut_icon', array(
		'label'			=> 'Favicon',
		'description'	=> 'Upload an PNG image to use as the site\'s favicon. Image should be at least 152x152 pixels.',
		'section'		=> 'global_settings',
		'settings'		=> 'shortcut_icon',
	) ) );

	/* Social Media */
	$wp_customize->add_setting( 'facebook_url' );
	$wp_customize->add_control( 'facebook_url', array(
		'label'			=> 'Facebook URL',
		'description'	=> 'Add a link to your Facebook page here.',
		'section'		=> 'social_media',
		'type'			=> 'url',
	) );
	$wp_customize->add_setting( 'twitter_url' );
	$wp_customize->add_control( 'twitter_url', array(
		'label'			=> 'Twitter URL',
		'description'	=> 'Add a link to your Twitter page here.',
		'section'		=> 'social_media',
		'type'			=> 'url',
	) );
	$wp_customize->add_setting( 'gplus_url' );
	$wp_customize->add_control( 'gplus_url', array(
		'label'			=> 'Google+ URL',
		'description'	=> 'Add a link to your Google+ page here.',
		'section'		=> 'social_media',
		'type'			=> 'url',
	) );
}
add_action( 'customize_register', '_s_customizer_add_fields' );
