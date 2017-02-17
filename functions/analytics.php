<?php
	
/*
 * Adds the Google Analytics code
 * place the code between the script tags
 */

add_action('wp_head', 'add_google_analytics');
function add_google_analytics() { ?>
	<script>
  // code here

</script>
<?php } 