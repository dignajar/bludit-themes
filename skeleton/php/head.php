   <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!--
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

<?php
	Theme::charset('UTF-8');

	Theme::viewport();

	// <title>Site title</title>
	Theme::title( $Site->title() );

	// <meta name="description" content="Site description">
	Theme::description( $Site->description() );

	// <meta name="keywords" content="HTML,CSS,XML,JavaScript">
	if( $Url->whereAmI()=='post' ) {
		Theme::keywords( $Post->tags() );
	}
	elseif( $Url->whereAmI()=='page' ) {
		Theme::keywords( $Page->tags() );
	}

	// <link rel="stylesheet" type="text/css" href="blog.css">
	Theme::css(array(
		'normalize.css',
		'skeleton.css',
		'blog.css'
	));

	Theme::css(array(
		'http://fonts.googleapis.com/css?family=Raleway:400,300,600'
	), '');

?>

<!-- Plugins Site Head -->
<?php Theme::plugins('siteHead') ?>
