<?php
/*
 * The template for the nav menu
 */ 
?>
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
    </div>
		<?php
		$main = array(
			'theme_location'  => 'menu-1',
			'container'       => 'div',
			'container_class' => 'collapse navbar-collapse',
			'container_id'    => 'navbar',
			'menu_class'      => 'nav navbar-nav navbar-right',
			'fallback_cb' 	    => 'wp_bootstrap_navwalker::fallback',
			'depth'			      => 2,
			'walker'			      => new wp_bootstrap_navwalker()
		);
		wp_nav_menu( $main ); ?>
  </div>
</nav>