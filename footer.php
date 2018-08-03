<footer id="footer">
  <?php
	   wp_nav_menu([
	     'theme_location'  => 'menu-2',
	     'container'       => 'div',
	     'container_id'    => null,
	     'container_class' => null,
	     'menu_id'         => false,
	     'menu_class'      => null,
	     'depth'           => 1
	   ]);
	?>
  <p class="mb-0">&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>
  <p class="mb-0"><a href="https://xpandmarketing.co.uk/" target="_blank">Website by <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 217.27 277.23"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M84.69 65.13L64.5 98.24c-3.27-6.08-9.91-18.39-16.32-30.11L13.11 7.55C9.77 1.48 6.84.4 1.49.23 1.15.21.79.2.43.2h34.42c9 0 12.61-.45 16.9 7.36zM85 206l-37.9 64.9c-2.63 4.5-4.54 6.29-8.5 6.29H.32c2.44-.13 4.78-1 6-2.5a25.49 25.49 0 0 0 2.53-3.75l32.64-55.54 3.51-5.91 1.78-3.3c0-.05 0-.08.06-.11l17.9-33.13 20 32.53zM209.58 277.23h-38.25c4.75 0 9.5-2.54 7-8l-17.52-28.48h-.08L96.9 136.66l76.68-125.74q.16-.3.3-.6a.21.21 0 0 0 0-.06c1.48-2.45 3.43-6.09.07-8.37a9.34 9.34 0 0 0-2.78-1.23 26.74 26.74 0 0 0-3.82-.66h35.23c12.89 0 12.5 4.61 9.17 10.92l-76.69 125.74 81.52 132.53c2.5 5.5-2.25 8.04-7 8.04z"/></g></g></svg></a></p>
</footer>
<?php wp_footer(); ?>
</body>
</html>