<?php
	Theme::charset('UTF-8');
	Theme::viewport('width=device-width, initial-scale=1');

	Theme::title();
	Theme::description();

	// CSS files
	Theme::css(array(
		'animate.css',
		'icomoon.css',
		'simple-line-icons.css',
		'style.css'
	));

	// Favicon
	Theme::favicon('favicon.png');

	// Plugins Site Head
	Theme::plugins('siteHead'); 
?>