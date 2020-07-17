<?php 
	
	function theme_en__features(){
    // register_nav_menu('headerMenuLocation','Header Menu Location');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_image_size('home-featured',600,400,array('center','center'));
    add_image_size('single',580,272,array('center','center'));
   register_nav_menus( array(
   		'primary' => __('Primary Menu','html2wp')
   ) );
  }

  add_action('after_setup_theme','theme_en__features');



	function get_style_script(){

	wp_enqueue_style('style',get_stylesheet_uri());
	wp_register_style('styles',get_template_directory_uri().'/assets/css/main.css',array(), 1,'all' );
	wp_enqueue_style( 'styles');
	wp_register_style('font-awesome',get_template_directory_uri().'/assets/css/fontawesome-all.min.css',array(), 1,'all' );
	wp_enqueue_style( 'font-awesome');



	// wp_enqueue_script('jquery');
	// wp_register_script('droptron',get_template_directory_uri().'assets/js/jquery.dropotron.min.js',array('jquery'), 1,'all' );
	// wp_enqueue_script( 'breakpoints');

	// wp_register_script('browser',get_template_directory_uri().'assets/js/browser.min.js',array(), 1,'all' );
	// wp_enqueue_script( 'browser');

	// wp_register_script('breakpoints',get_template_directory_uri().'assets/js/breakpoints.min.js',array(), 1,'all' );
	// wp_enqueue_script( 'breakpoints');

	// wp_register_script('util',get_template_directory_uri().'assets/js/util.js',array(), 1,'all' );
	// wp_enqueue_script( 'util');

	// wp_register_script('main',get_template_directory_uri().'assets/js/main.js',array(), 1,'all' );
	// wp_enqueue_script( 'main');



	wp_enqueue_script('jquery');

	wp_enqueue_script('bootstrap',get_theme_file_uri('/assets/js/jquery.dropotron.min.js'),array('jquery'),microtime(),true);

	wp_enqueue_script('swiper',get_theme_file_uri('/assets/js/browser.min.js'),array(),microtime(),true);

	wp_enqueue_script('scripts',get_theme_file_uri('assets/js/breakpoints.min.js'),array(),microtime(),true);

	wp_enqueue_script('custom',get_theme_file_uri('/assets/js/util.js'),array(),microtime(),true);
	wp_enqueue_script('customss',get_theme_file_uri('assets/js/main.js'),array(),microtime(),true);




	// wp_register_script('breakpoints',get_template_directory_uri().'assets/js/breakpoints.min.js',array(), 1,'all' );
	// wp_register_script( 'breakpoints');


	}
	add_action('wp_enqueue_scripts','get_style_script');

	function mytheme_widgets_init(){
	 register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'doetrope'),
        'id'            => 'main_sidebar',
        'description'   => 'Main Sidebar on Right Side',
        'before_widget' => '<section id="widget_area_side" class=" box widget sidebar">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h3 id="widget_area_side_title" class="widget sidebar-title">',
        'after_title'   => '</h3></header>',
    ) );
     //home bann/er
     register_sidebar( array(
        'name'          => __( 'Home Banner', 'doetrope'),
        'id'            => 'home_banner',
        'description'   => 'Banner on Homepage',
        'before_widget' => '<section id="widget_area_banner" class="widget banner">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 id="widget_area_banner_title" class="widget banner-title">',
        'after_title'   => '</h3>',
    ) );
     //services widget
     register_sidebar( array(
        'name'          => __( 'Home Services', 'doetrope'),
        'id'            => 'home_services',
        'description'   => 'Services on Homepage',
        'before_widget' => '<section id="widget_area_service" class="widget service">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 id="widget_area_service_title" class="widget service-title">',
        'after_title'   => '</h3>',
    ) );

    //footer widgets
    register_sidebar( array(
        'name'          => __( 'Footer Widget 1', 'doetrope'),
        'id'            => 'footer-1',
        'description'   => 'Main Sidebar on Right Side',
        'before_widget' => '<aside id="widget_area_one" class="widget footer1">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 id="widget_area_one_title" class="widget footer1-title">',
        'after_title'   => '</h3>',
    ) );
     register_sidebar( array(
        'name'          => __( 'Footer Widget 2', 'doetrope'),
        'id'            => 'footer-2',
        'description'   => 'Main Sidebar on Right Side',
        'before_widget' => '<aside id="widget_area_two" class="widget footer2">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 id="widget_area_two_title" class="widget footer2-title">',
        'after_title'   => '</h3>',
    ) );
     register_sidebar( array(
        'name'          => __( 'Footer Widget 3', 'doetrope'),
        'id'            => 'footer-3',
        'description'   => 'Main Sidebar on Right Side',
        'before_widget' => '<aside id="widget_area_three" class="widget footer3">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 id="widget_area_three_title" class="widget footer3-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'mytheme_widgets_init' );
 ?>

 