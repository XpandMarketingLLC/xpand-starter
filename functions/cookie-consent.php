<?php

/* 
 * Cookie consent custom code - modify the values as necessary
 * For more details visit https://cookieconsent.insites.com/ 
 * 
 * The CSS and JS is included directly from the theme to 
 * reduce HTTP requests 
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