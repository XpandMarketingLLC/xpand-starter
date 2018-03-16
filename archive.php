<?php
	
/* 
 * The archive page which is the default for category archives etc
 */

get_header(); 

	get_template_part( 'template-parts/partials/content', 'banner' );

	if ( have_posts() ) : 
	
		while ( have_posts() ) : the_post();
	
			get_template_part( 'template-parts/content');
	
		endwhile;
		
	else :
	
		get_template_part( 'template-parts/content', 'none');
			
	endif; 
			
get_footer();