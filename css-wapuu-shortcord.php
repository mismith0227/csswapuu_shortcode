<?php
/**
 * Plugin Name: CSS Wapuu Shortcode
 * Plugin URI: https://wordpress.org/plugins/css-wapuu-shortcord/
 * Description: It is a plug-in that embed wapuu drawn by CSS in the short code .
 * Version:	 1.0.5
 * Author:	  Misumi Takuma
 * Author URI: https://profiles.wordpress.org/mismith227/
 * License:	 GPL v2 license or any later version.
 */

function css_wapuu_shortcord_stylesheet() {
	wp_enqueue_style( 'style', plugin_dir_url( __FILE__ ) . '/css/style.css', array(), '0.1', 'all' );
}
add_action( 'wp_enqueue_scripts', 'css_wapuu_shortcord_stylesheet' );

function css_wapuu_shortcord( $atts, $content=null ) {

$atts = shortcode_atts( array(
	'scale'	=> 1,
), $atts );

$scale = filter_var( $atts['scale'], FILTER_VALIDATE_FLOAT );

if ( $scale !== FALSE ) {
	$style = esc_attr( sprintf( '-webkit-transform: scale(%1$s);-ms-transform: scale(%1$s);transform: scale(%1$s);', $scale ) );
} else {
	$style = "";
}


return '<div class="css-wapuu" style="' . $style . '">
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
add_shortcode( 'css_wapuu', 'css_wapuu_shortcord' );
