<?php

get_header(); 

	get_template_part( 'template-parts/partials/content', 'page-start' );

	if ( have_posts() ) : 
	
		while ( have_posts() ) : the_post();
	
			get_template_part( 'template-parts/content');
	
		endwhile;
		
	else :
	
		get_template_part( 'template-parts/content', 'none');
			
	endif; 
	
	get_template_part( 'template-parts/partials/content', 'page-end' );
		
get_footer();