<?php

/** Upgrade jQuery */
add_action('wp_enqueue_scripts', 'jquery_script_method');
function jquery_script_method()
{
	wp_deregister_script('jquery');
}

/** Upgrade Styles */
add_action('wp_enqueue_scripts', 'load_styles');
function load_styles()
{
	wp_enqueue_style('main', get_template_directory_uri() . '/dist/css/main.min.css');
}

/** Upgrade Scripts */
add_action('wp_enqueue_scripts', 'load_scripts');
function load_scripts()
{
	wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/main.min.js', 'jquery', false, true);
}

/** Include embedded theme features */
add_theme_support('widgets');
add_theme_support('post-thumbnails');

/** Add default image setting to ACF image fields */
add_action('acf/render_field_settings/type=image', 'add_default_value_to_image_field');
function add_default_value_to_image_field($field)
{
	acf_render_field_setting($field, array(
		'label'			=> 'Изображение по умолчанию',
		'instructions'		=> 'Появится когда будете создавать новую страницу от шаблона',
		'type'			=> 'image',
		'name'			=> 'default_value',
	));
}

add_filter('show_admin_bar', '__return_false');
add_filter('acf/format_value/type=textarea', 'do_shortcode');

//Page Slug Body Class
add_filter('body_class', 'add_slug_body_class');
function add_slug_body_class($classes)
{
	global $post;
	if (isset($post)) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
