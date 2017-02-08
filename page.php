<?php

get_header(); 

	get_template_part( 'template-parts/partials/content', 'page-start' );
	
		get_template_part( 'template-parts/partials/content', 'main-column-start' );

			while ( have_posts() ) : the_post();
	
				get_template_part( 'template-parts/content', 'page' );
	
			endwhile;
		
		get_template_part( 'template-parts/partials/content', 'main-column-end' );
		
		get_sidebar();
	
	get_template_part( 'template-parts/partials/content', 'page-end' );
		
get_footer();