<?php

get_header(); 

	get_template_part( 'template-parts/partials/content', 'banner' );

	get_template_part( 'template-parts/partials/content', 'page-start' );
	
	get_template_part( 'template-parts/partials/content', 'row-start' );

	if ( have_posts() ) : 
	
	get_template_part( 'template-parts/partials/col-8', 'start' );
	
		while ( have_posts() ) : the_post();
	
			get_template_part( 'template-parts/content');
	
		endwhile;
		
	get_template_part( 'template-parts/partials/col-8', 'end' );
	
	get_template_part( 'template-parts/partials/col-4', 'start' );
	
		get_template_part( 'template-parts/partials/content', 'categories' );
	
	get_template_part( 'template-parts/partials/col-4', 'end' );
		
	else :
	
		get_template_part( 'template-parts/content', 'none');
			
	endif; 
	
	get_template_part( 'template-parts/partials/content', 'row-end' );
	
	xpand_custom_numeric_posts_nav();
	
	get_template_part( 'template-parts/partials/content', 'page-end' );
		
get_footer();