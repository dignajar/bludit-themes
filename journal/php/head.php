<?php
	Theme::charset('utf-8');
	Theme::viewport('width=device-width, initial-scale=1');

	Theme::title();
	Theme::description();

	Theme::favicon('favicon.png');
?>

<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo HTML_PATH_THEME ?>assets/css/siimple.min.css">
<link rel="stylesheet" href="<?php echo HTML_PATH_THEME ?>assets/css/style.css">

<?php

// Load plugins, hook: Site head
Theme::plugins('siteHead');

?>