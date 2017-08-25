<?php
/*
 * The template for the nav menu
 */ 
?>


<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<div class="container">
  <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php
	   wp_nav_menu([
	     'theme_location'  => 'menu-1',
	     'container'       => 'div',
	     'container_id'    => 'navbar',
	     'container_class' => 'collapse navbar-collapse',
	     'menu_id'         => false,
	     'menu_class'      => 'navbar-nav mr-auto',
	     'depth'           => 2,
	     'fallback_cb'     => 'bs4navwalker::fallback',
	     'walker'          => new bs4navwalker()
	   ]);
	   ?>
	</div>
</nav>