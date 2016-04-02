<?php
	Theme::charset('UTF-8');
	Theme::viewport('width=device-width, initial-scale=1');

	Theme::title();
	Theme::description();

	// CSS files
	Theme::css(array(
		'foundation.min.css',
		'app.css'
	));

	// Javascript files
	Theme::javascript(array(
		'foundation.min.js',
		'app.js'
	));

	// Favicon
	Theme::favicon('favicon.png');

	// Plugins Site Head
	Theme::plugins('siteHead'); 
?>