<?php
// Add API key for Google maps ACF Plugin
function my_acf_init() {
	
	acf_update_setting('google_api_key', 'KEY_HERE');
}

add_action('acf/init', 'my_acf_init');