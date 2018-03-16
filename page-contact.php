<?php
	/* 
	 * Template Name: Contact
	 */
	 
get_header(); 
	
	get_template_part( 'template-parts/partials/content', 'banner' );
	
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'contact' );

	endwhile;
				
get_footer();