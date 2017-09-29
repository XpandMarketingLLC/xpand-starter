<aside class="sidebar-widget categories">
	<h3>Categories</h3>
	<ul>
	<?php 
	$args = array(
	'show_option_all' => false,
	'exclude' => array(1),
	'title_li' => __( '' )
	);
	
	wp_list_categories($args); ?>
	</ul>
</aside>