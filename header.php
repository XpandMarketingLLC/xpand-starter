<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--[if lt IE 9]>
	<div class="old-browser-container">
		<div class="old-browser-message">
			<div class="o-b-title">Your browser is outdated</div>
				<div class="o-b-message">Your browser is out of date, and some things may not look right. For an optimal viewing expierence, please <a href="https://www.google.com/chrome/index.html" target="_blank">update your browser.</a>
			</div>
		</div>
	</div><![endif]--> 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<?php get_template_part( 'template-parts/partials/content', 'nav-menu' ); ?>