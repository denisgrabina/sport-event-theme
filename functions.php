<?php



add_action( 'wp_enqueue_scripts', 'jquery_script_method' );
function jquery_script_method() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js' );
}

add_action( 'wp_enqueue_scripts', 'load_scripts_style' );
function load_scripts_style() {
	// css
    wp_enqueue_style('normalize', get_template_directory_uri() . '/libs/normalize/normalize.css');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/libs/bootstrap/bootstrap.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    // conditions for template styles
	if ( is_page_template('event-football.php') ) {
		wp_enqueue_style('media-queries', get_template_directory_uri() . '/css/event-football.css');
	} elseif ( is_page_template('event-lc-final.php') ) {
		wp_enqueue_style('media-queries', get_template_directory_uri() . '/css/event-lc-final.css');
	}
    // js
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, '3.3.1',
		true );
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/libs/bootstrap/bootstrap.bundle.js', 'jquery', false, true );
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', 'jquery', false, true );
};

add_theme_support('widgets');

add_theme_support('post-thumbnails');

// add default image setting to ACF image fields
// let's you select a defualt image
// this is simply taking advantage of a field setting that already exists

add_action('acf/render_field_settings/type=image', 'add_default_value_to_image_field');
function add_default_value_to_image_field($field) {
	acf_render_field_setting( $field, array(
		'label'			=> 'Изображение по умолчанию',
		'instructions'		=> 'Появится когда будете создавать новую страницу от шаблона',
		'type'			=> 'image',
		'name'			=> 'default_value',
	));
}
