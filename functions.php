<?php


/**
 * Essential theme supports
 * */
function techub_theme_support(){
	/** post thumbnail **/
	add_theme_support( 'post-thumbnails' );

	/** automatic feed link*/
	add_theme_support( 'automatic-feed-links' );

	/** tag-title **/
	add_theme_support( 'title-tag' );

	/** HTML5 support **/
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

	/** post formats */
	$post_formats = array('aside','image','gallery','video','audio','link','quote','status');
	add_theme_support( 'post-formats', $post_formats);

//	register_nav_menus([
//		'main-menu' => __('Main Menu', 'techub')
//	]);

	/** refresh widgest **/
//	add_theme_support( 'customize-selective-refresh-widgets' );

	/** custom background **/
//	$bg_defaults = array(
//		'default-image'          => '',
//		'default-preset'         => 'default',
//		'default-size'           => 'cover',
//		'default-repeat'         => 'no-repeat',
//		'default-attachment'     => 'scroll',
//	);
//	add_theme_support( 'custom-background', $bg_defaults );

	/** custom header **/
	$header_defaults = array(
		'default-image'          => '',
		'width'                  => 300,
		'height'                 => 60,
		'flex-height'            => true,
		'flex-width'             => true,
		'default-text-color'     => '',
		'header-text'            => true,
		'uploads'                => true,
	);
//	add_theme_support( 'custom-header', $header_defaults );

	/** custom log **/
//	add_theme_support( 'custom-logo', array(
//		'height'      => 60,
//		'width'       => 400,
//		'flex-height' => true,
//		'flex-width'  => true,
//		'header-text' => array( 'site-title', 'site-description' ),
//	) );



}
add_action('after_setup_theme','techub_theme_support');




include_once ("inc/common/scripts.php");
include_once ("inc/template-function.php");
if(class_exists('Kirki')){
	include_once ("inc/techub-kirki.php");
}


