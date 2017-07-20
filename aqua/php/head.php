<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $Site->title() ?></title>
<link rel="stylesheet" href="<?php echo HTML_PATH_THEME ?>css/aqua.css">
<?php
	// CSS from theme/css/
	// Theme::css(array(
		// 'aqua.css'
	// ));

	// Javascript from theme/js/
	// Theme::javascript('file.name.js');

	// Favicon from theme/img/
	Theme::favicon('favicon.png');

	// Where Am I
  if( $Url->whereAmI()=='post' ) {
		Theme::keywords( $Post->tags() );
		Theme::description( $Post->description() );
	}
	elseif( $Url->whereAmI()=='page' ) {
		Theme::keywords( $Page->tags() );
		Theme::description( $Page->description() );
	}
	else {
		Theme::description( $Site->description() );
	}
?>
<!-- Custom Fonts and Scripts -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,700|Merriweather:400,700' rel='stylesheet' type='text/css'>
<script src="<?php echo HTML_PATH_THEME ?>js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<!-- Plugins Site Head -->
<?php Theme::plugins('siteHead') ?>
