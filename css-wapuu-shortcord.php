<?php
/**
 * Plugin Name: CSS Wapuu Shortcode
 * Plugin URI:  
 * Description: It is a plug-in that embed wpuu drawn by CSS in the short code .
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
<!-- tail・line/draw しっぽ・線/塗り -->
<div class="line-tail1"></div>
<div class="line-tail2"></div>
<div class="tail1"></div>
<div class="tail2"></div>
<div class="tail3"></div>
<div class="tail4"></div>

<!-- line 線 -->
<div class="line1"></div>
<div class="line2"></div>

<!-- ball white-line ボール・wを囲む白線 -->
<div class="ball"></div>
<div class="ball2"></div>
<div class="boll-light"></div>
<div class="w-circle"></div>
<div class="w-circle-inner"></div>

<!-- w -->
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

<!-- face・line/draw 顔・線 -->
<div class="line-face1"></div>
<div class="line-face2"></div>

<!-- hands・line 両手・線 -->
<div class="line-right-hand"></div>
<div class="line-left-hand"></div>

<!-- left-leg・line 左脚・線 -->
<div class="line-left-leg"></div>

<!-- face・draw 顔・塗り -->
<div class="face"></div>
<div class="neck"></div>

<!-- body・draw 胴・塗り -->
<div class="body"></div>
<div class="belly"></div>

<!-- arm・draw 腕・塗り -->
<div class="left-hand"></div>
<div class="right-hand"></div>
<div class="arm"></div>

<!-- right-foot・line/draw 右足・線/塗り -->
<div class="line-right-foot"></div>
<div class="right-foot"></div>

<!-- left-leg・draw 左脚・塗り -->
<div class="left-leg"></div>
<!-- left-foot・line/draw 左足・線/塗り -->
<div class="line-left-foot"></div>
<div class="left-foot"></div>
<div class="thenar"></div>

<!-- left-ear・line/draw 左耳・線/塗り -->
<div class="line-left-ear"></div>
<div class="ear-left"></div>

<!-- right-ear・draw 右耳・塗り -->
<div class="ear-right"></div>

<!-- face-parts 顔パーツ -->
<div class="eye-rignt blink"></div>
<div class="eye-left blink"></div>
<div class="nose"></div>
<div class="mouth"></div>

</div>';
}
add_shortcode('css_wapuu', 'css_wapuu_shortcord');
?>