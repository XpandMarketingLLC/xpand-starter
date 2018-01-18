<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package starter
 */

get_header(); 

	get_template_part( 'template-parts/partials/content', 'page-start' );

		get_template_part( 'template-parts/content', '404' );
		
	get_template_part( 'template-parts/partials/content', 'page-end' );
		
get_footer();