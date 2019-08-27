<?php

/** Upgrade jQuery */
add_action( 'wp_enqueue_scripts', 'jquery_script_method' );
function jquery_script_method() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//code.jquery.com/jquery-3.4.1.min.js' );
}

/** Upgrade Styles */
add_action('wp_enqueue_scripts', 'load_styles');
function load_styles() {
	wp_enqueue_style('main', get_template_directory_uri() . '/build/css/main.min.css');
}

/** Upgrade Scripts */
add_action('wp_enqueue_scripts', 'load_scripts');
function load_scripts() {
	wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.4.1.min.js', false, '3.4.1',
		true );
	wp_enqueue_script('main', get_template_directory_uri() . '/build/js/main.min.js', 'jquery', false, true );
}

/** Include embedded theme features */
add_theme_support('widgets');
add_theme_support('post-thumbnails');

/** Add default image setting to ACF image fields */
add_action('acf/render_field_settings/type=image', 'add_default_value_to_image_field');
function add_default_value_to_image_field($field) {
	acf_render_field_setting( $field, array(
		'label'			=> 'Изображение по умолчанию',
		'instructions'		=> 'Появится когда будете создавать новую страницу от шаблона',
		'type'			=> 'image',
		'name'			=> 'default_value',
	));
}
