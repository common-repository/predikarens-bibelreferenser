<?php
function predbr_add_scripts(){
//Add main css for possible later implementation.
	wp_enqueue_style('predbr-main-style', PREDBR_CSS_URL.'/style.css');
	//add main js or mobile-main js
	if ( ! wp_is_mobile() ) {
		wp_enqueue_script('predbr-main-script', PREDBR_JS_URL.'/main.js');
	}
	else {
		wp_enqueue_script( 'predbr-main-script', PREDBR_JS_URL.'/mobile-main.js' );

	}
}	

add_action('wp_footer','predbr_add_scripts');
?>