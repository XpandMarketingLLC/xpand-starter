<?php
	/* 
	 * Template Name: About
	 */
	 
get_header(); 

	get_template_part( 'template-parts/partials/content', 'banner' );

	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'about' );

	endwhile;
				
get_footer();