<?php
	/* 
	 * Template Name: Home
	 */
	 
get_header(); 

	get_template_part( 'template-parts/partials/content', 'page-start' );

		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'home' );

		endwhile;
		
	get_template_part( 'template-parts/partials/content', 'page-end' );
		
get_footer();