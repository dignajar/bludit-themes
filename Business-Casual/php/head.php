<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="<?php echo $Site->description() ?>">
<meta name="author" content="">
<title><?php echo $Site->title() ?></title>

<?php
	// CSS from theme/css/
	Theme::css(array(
		 //'pure-min.css',
		 //'grids-responsive-min.css',
		 'blog.css',
		//'rainbow.github.css',
		'bootstrap.css',
		'bootstrap.min.css',
		'business-casual.css',
	));

	// Javascript from theme/js/
	Theme::javascript(array(
	'rainbow.min.js',
	'bootstrap.js',
	'bootstrap.min.js',
	'jquery.js',
	));

	// Favicon from theme/img/
	Theme::favicon('favicon.png');

	// <meta name="keywords" content="HTML,CSS,XML,JavaScript">
	if( $Url->whereAmI()=='post' ) {
		Theme::keywords( $Post->tags() );
	}
	elseif( $Url->whereAmI()=='page' ) {
		Theme::keywords( $Page->tags() );
	}
?>

<!-- Custom Fonts -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
<!-- Pure and Google Fonts -->
<style>
	html, button, input, select, textarea,
	.pure-g [class *= "pure-u"] {
		font-family: 'Open Sans', sans-serif;
	}
</style>

<!-- Plugins Site Head -->
<?php Theme::plugins('siteHead') ?>