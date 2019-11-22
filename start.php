<?php

/**
 * Template name: Start
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sport-event-theme
 */

get_header();

if (is_front_page() || is_page('start-bazabet')) {
	get_template_part('template-parts/content', 'start');
}

if (
	is_page('four-plus-one') ||
	is_page('four-plus-one-isport') ||
	is_page('four-plus-one-football') ||
	is_page('four-plus-one-exoclick')
) {
	get_template_part('template-parts/promo/content', 'four-plus-one');
}

get_footer();
