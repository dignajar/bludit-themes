<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<title><?php echo $Site->title() ?></title>

<?php
	// CSS from theme/css/
	Theme::css(array(
		'main.css'
	));

	//if IE <= 8
	if (preg_match('/(?i)msie [5-8]/', $_SERVER['HTTP_USER_AGENT'])) {
		Theme::css(array(
			'ie8.css'
		));
	Theme::javascript('html5shiv.js');
	} else {
	//if IE > 8
		Theme::css(array(
			'ie9.css'
		));
	}

	// Favicon from theme/img/
	Theme::favicon('favicon.png');
?>

<!-- Plugins Site Head -->
<?php Theme::plugins('siteHead') ?>
