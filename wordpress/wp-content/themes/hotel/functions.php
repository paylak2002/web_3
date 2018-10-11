<?php 
	function style()
	{
		wp_enqueue_style('style',get_stylesheet_uri());
	}
	add_action('wp_enqueue_scripts','style');
	register_nav_menus(array(
		'primary' => ('Primary menu')
		));
	register_sidebar(array(
		'id' => 'footer1',
		'name' => 'Footer'
		));
	function image()
	{
		add_theme_support('post-thumbnails');
		add_image_size('room',560,428,false);
	}
	add_action('after_setup_theme','image');
	function excerpt()
	{
		return 30;
	}
	add_filter('excerpt_length','excerpt');
?> 