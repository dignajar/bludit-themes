<meta name="description" content="hawtecanvas.com">
<meta name="author" content="hawtecanvas">
<?php
	Theme::charset('utf-8');
	Theme::viewport('width=device-width');
	Theme::title();
	Theme::description();
	Theme::favicon('favicon.png');
?>

<link rel="stylesheet" href="<?php echo HTML_PATH_THEME ?>stylesheets/foundation.css">
<link rel="stylesheet" href="<?php echo HTML_PATH_THEME ?>stylesheets/app.css">
<script src="/javascripts/<?php echo HTML_PATH_THEME_JS.'modernizr.foundation.js' ?>"></script>
<?php

// Add local Fonts Awesome
Theme::fontAwesome();

// Load plugins, hook: Site head
Theme::plugins('siteHead');

?>