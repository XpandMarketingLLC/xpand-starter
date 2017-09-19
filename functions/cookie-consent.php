<?php
	
function load_cookie_scripts() {
	
	// register cookie consent css
	wp_enqueue_style( 'cookieconsent_css', '//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css', array(), NULL );
	
	// Register the cookie consent js
	wp_register_script('cookieconsent', '//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js', array(), '3.0.3', false);
	
	// Enqueue scripts
	wp_enqueue_script('cookieconsent');
	
}

add_action('wp_enqueue_scripts', 'load_cookie_scripts');

/* 
 * Cookie consent custom code - modify the values as necessary
 * For more details visit https://cookieconsent.insites.com/ 
 */

add_action('wp_head', 'add_cookie_consent');
function add_cookie_consent() { ?>
<script>
	var url = window.location.host;
	var proto = window.location.protocol;
// 	console.log(proto + "//" + url + "/cookie-policy");
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "rgba(0,0,0,.8)",
      "text": "#ffffff"
    },
    "button": {
      "background": "#A30006",
      "text": "#ffffff"
    }
  },
  "theme": "edgeless",
  "content": {
    "href": proto + "//" + url + "/cookie-policy"
  }
})});
</script>
<?php }