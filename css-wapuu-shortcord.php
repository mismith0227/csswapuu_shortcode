<?php
/**
 * Plugin Name: CSS Wapuu Shortcode
 * Plugin URI:  
 * Description: It is a plug-in that embed wapuu drawn by CSS in the short code .
 * Version:	 0.1
 * Author:	  Misumi Takuma
 * Author URI:  
 * License:	 GPLv2
 */

function css_wapuu_shortcord_stylesheet() {
		echo '<link rel="stylesheet" href="'. get_bloginfo('wpurl') . '/wp-content/plugins/css-wapuu-shortcord/css/style.css" type="text/css" media="screen" />';
}
add_action('wp_head', 'css_wapuu_shortcord_stylesheet');

function css_wapuu_shortcord($atts, $content=null) {
	return '<div class="css-wapuu">
<div class="line-tail1"></div>
<div class="line-tail2"></div>
<div class="tail1"></div>
<div class="tail2"></div>
<div class="tail3"></div>
<div class="tail4"></div>

<div class="line1"></div>
<div class="line2"></div>

<div class="ball"></div>
<div class="ball2"></div>
<div class="boll-light"></div>
<div class="w-circle"></div>
<div class="w-circle-inner"></div>

<div class="w-1"></div>
<div class="w-2"></div>
<div class="w-3"></div>
<div class="w-4"></div>
<div class="w-5"></div>
<div class="w-6"></div>
<div class="w-7"></div>
<div class="w-8"></div>
<div class="w-9"></div>
<div class="w-10"></div>
<div class="w-11"></div>
<div class="w-12"></div>
<div class="w-13"></div>

<div class="line-face1"></div>
<div class="line-face2"></div>

<div class="line-right-hand"></div>
<div class="line-left-hand"></div>

<div class="line-left-leg"></div>

<div class="face"></div>
<div class="neck"></div>

<div class="body"></div>
<div class="belly"></div>

<div class="left-hand"></div>
<div class="right-hand"></div>
<div class="arm"></div>

<div class="line-right-foot"></div>
<div class="right-foot"></div>

<div class="left-leg"></div>
<div class="line-left-foot"></div>
<div class="left-foot"></div>
<div class="thenar"></div>

<div class="line-left-ear"></div>
<div class="ear-left"></div>

<div class="ear-right"></div>

<div class="eye-rignt blink"></div>
<div class="eye-left blink"></div>
<div class="nose"></div>
<div class="mouth"></div>

</div>';
}
add_shortcode('css_wapuu', 'css_wapuu_shortcord');
?>