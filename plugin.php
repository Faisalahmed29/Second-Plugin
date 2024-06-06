<?php

/*

Plugin Name: Footer Plugin
Author: Faisal

*/ 

add_action('wp_footer', 'small_plugin');

function small_plugin(){
	?>
	<div class="footer-plugin">
		<h2>About</h2>
		<a href="#"><p>Web Developer</p></a>
		<a href="#"><p>Web Design</p></a>
		<a href="#"><p>Theme Developer</p></a>
		<a href="#"><p>Plugin Developer</p></a>
		<p>© Copyright 2024. All rights reserved.</p>
	</div>

  <?php
}



	
