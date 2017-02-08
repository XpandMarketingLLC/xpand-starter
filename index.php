<?php

get_header(); 

	get_template_part( 'template-parts/partials/content', 'page-start' );

	if ( have_posts() ) : 
	
		get_template_part( 'template-parts/partials/content', 'main-column-start' );

		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

		endwhile;
		
		get_template_part( 'template-parts/partials/content', 'main-column-end' );
		
		get_sidebar();

	endif; 
	
	get_template_part( 'template-parts/partials/content', 'page-end' );
		
get_footer();