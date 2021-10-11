<?php

add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action( 'wp_footer', 'scripts_theme' );
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){
	register_sidebar( array(
		'name'          => "Right sidebar",
		'id'            => "right-sidebar",
		'description'   => 'Sidebar description',
		'class'         => '',
		'before_widget' => '<div class="col-lg-12">',
		'after_widget'  => "</div>",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",

	) );
}
function theme_register_nav_menu() {
	register_nav_menu( 'top', 'Header menu' );
	register_nav_menu( 'upper-footer', 'Upper footer menu' );
	register_nav_menu( 'lower-footer', 'Lower footer menu' );
	register_nav_menu( 'Button-View-All-Posts', 'Button-View-All-Posts' );
	add_theme_support( 'post-thumbnails', array( 'post') );
	add_theme_support( 'title-tag' );
	add_image_size( 'post-home-preview', 770, 340, true );
	add_image_size( 'post-preview', 370, 340, true );
	add_image_size( 'slider-preview', 540, 450, false );
}
function style_theme(){
	wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() .'/assets/css/fontawesome.css' );
	wp_enqueue_style( 'flex_slider', get_template_directory_uri() .'/assets/css/flex_slider.css' );
	wp_enqueue_style( 'templatemo-stand-blog', get_template_directory_uri() .'/assets/css/templatemo-stand-blog.css' );
	wp_enqueue_style( 'owl', get_template_directory_uri() .'/assets/css/owl.css' );
}

function scripts_theme(){
	wp_enqueue_script( 'jquery', get_template_directory_uri() .'/assets/js/jquery/jquery.min.js' );
	wp_enqueue_script( 'slick', get_template_directory_uri() .'/assets/js/slick.js' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() .'/assets/js/bootstrap/js/bootstrap.bundle.min.js' );
	wp_enqueue_script( 'custom', get_template_directory_uri() .'/assets/js/custom.js' );
	wp_enqueue_script( 'isotope', get_template_directory_uri() .'/assets/js/isotope.js' );
	wp_enqueue_script( 'accordions', get_template_directory_uri() .'/assets/js/accordions.js' );
	wp_enqueue_script( 'owl', get_template_directory_uri() .'/assets/js/owl.js' );

}