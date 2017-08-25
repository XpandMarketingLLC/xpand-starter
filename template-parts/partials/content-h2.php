<?php 
	
	/* 
	 * Use on blog archives
	 */
	
// 	$h1_title = get_field('h1_title');
	
	the_title('<h2 itemprop="name"><a item="url" href="' . get_the_permalink() . '" title="' . get_the_title() . '">', '</a></h2>'); ?>