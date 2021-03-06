<?php
/**
 * Child Theme Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Varya Child
 * @since 1.0.0
 */

// if ( ! function_exists( 'varya_child_setup' ) ) :
// 	/**
// 	 * Sets up theme defaults and registers support for various WordPress features.
// 	 *
// 	 * Note that this function is hooked into the after_setup_theme hook, which
// 	 * runs before the init hook. The init hook is too late for some features, such
// 	 * as indicating support for post thumbnails.
// 	 */
// 	function varya_child_setup() {

// 		// Add support for editor styles.
// 		add_theme_support( 'editor-styles' );

// 		// Add child theme editor font sizes to match Sass-map variables in `_config-child-theme-deep.scss`.
// 		add_theme_support(
// 			'editor-font-sizes',
// 			array(
// 				array(
// 					'name'      => __( 'Small', 'varya-child' ),
// 					'shortName' => __( 'S', 'varya-child' ),
// 					'size'      => 15,
// 					'slug'      => 'small',
// 				),
// 				array(
// 					'name'      => __( 'Normal', 'varya-child' ),
// 					'shortName' => __( 'M', 'varya-child' ),
// 					'size'      => 18,
// 					'slug'      => 'normal',
// 				),
// 				array(
// 					'name'      => __( 'Large', 'varya-child' ),
// 					'shortName' => __( 'L', 'varya-child' ),
// 					'size'      => 25,
// 					'slug'      => 'large',
// 				),
// 				array(
// 					'name'      => __( 'Huge', 'varya-child' ),
// 					'shortName' => __( 'XL', 'varya-child' ),
// 					'size'      => 37,
// 					'slug'      => 'huge',
// 				),
// 			)
// 		);

// 		// Add child theme editor color pallete to match Sass-map variables in `_config-child-theme-deep.scss`.
// 		add_theme_support(
// 			'editor-color-palette',
// 			array(
// 				array(
// 					'name'  => __( 'Primary', 'varya-child' ),
// 					'slug'  => 'primary',
// 					'color' => '#ff0000',
// 				),
// 				array(
// 					'name'  => __( 'Yellow', 'varya-child' ),
// 					'slug'  => 'background',
// 					'color' => '#ffff00',
// 				),
// 			)
// 		);

// 		/**
// 		 * Add support for core custom logo.
// 		 *
// 		 * @link https://codex.wordpress.org/Theme_Logo
// 		 */
// 		add_theme_support(
// 			'custom-logo',
// 			array(
// 				'height'      => 96,
// 				'width'       => 100,
// 				'flex-width'  => true,
// 				'flex-height' => true,
// 				'header-text' => array( 'site-title' ),
// 			)
// 		);
// 	}
// endif;
// add_action( 'after_setup_theme', 'varya_child_setup', 12 );

// /**
//  * Filter the content_width in pixels, based on the child-theme's design and stylesheet.
//  */
// function varya_child_content_width() {
// 	return 750;
// }
// add_filter( 'varya_content_width', 'varya_child_content_width' );

// /**
//  * Add Google webfonts, if necessary
//  *
//  * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
//  */
// function varya_child_fonts_url() {

// 	$fonts_url = '';

// 	/**
// 	 * Translators: If there are characters in your language that are not
// 	 * supported by Open Sans, translate this to 'off'. Do not translate
// 	 * into your own language.
// 	 */
// 	$crimson_text = esc_html_x( 'on', 'Crimson Text font: on or off', 'varya-child' );

// 	if ( 'off' !== $crimson_text ) {
// 		$font_families = array();

// 		if ( 'off' !== $crimson_text ) {
// 			$font_families[] = 'Crimson Text:400,600,700,400italic,600italic';
// 		}

// 		$query_args = array(
// 			'family' => urlencode( implode( '|', $font_families ) ),
// 			'subset' => urlencode( 'latin,latin-ext' ),
// 		);

// 		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
// 	}

// 	return esc_url_raw( $fonts_url );
// }

// /**
//  * Enqueue scripts and styles.
//  */
// function varya_child_scripts() {

// 	// enqueue Google fonts, if necessary
// 	wp_enqueue_style( 'varya-child-fonts', varya_child_fonts_url(), array(), null );

// 	// Child theme variables
// 	wp_enqueue_style( 'varya-child-variables-style', get_stylesheet_directory_uri() . '/variables.css', array(), wp_get_theme()->get( 'Version' ) );

// 	// dequeue parent styles
// 	// wp_dequeue_style( 'varya-variables-style' );

// 	// enqueue child styles
// 	wp_enqueue_style('varya-child-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ));

// 	// enqueue child RTL styles
// 	wp_style_add_data( 'varya-child-style', 'rtl', 'replace' );

// }
// add_action( 'wp_enqueue_scripts', 'varya_child_scripts', 99 );

// /**
//  * Enqueue theme styles for the block editor.
//  */
// function varya_child_editor_styles() {

// 	// Enqueue Google fonts in the editor, if necessary
// 	wp_enqueue_style( 'varya-child-editor-fonts', varya_child_fonts_url(), array(), null );

// 	// Load the child theme styles within Gutenberg.
// 	wp_enqueue_style( 'varya-child-editor-variables', get_theme_file_uri( 'variables-editor.css' ), false, wp_get_theme()->get( 'Version' ), 'all' );

// 	// Load the parent theme styles within Gutenberg.
// 	wp_enqueue_style( 'varya-editor-styles', get_template_directory_uri() . '/style-editor.css', false, wp_get_theme()->get( 'Version' ), 'all' );

// 	// Load the child theme editor styles within Gutenberg.
// 	wp_enqueue_style( 'varya-child-editor-styles', get_stylesheet_directory_uri() . '/style-editor.css', false, wp_get_theme()->get( 'Version' ), 'all' );
// }
// add_action( 'enqueue_block_editor_assets', 'varya_child_editor_styles', 99 );
