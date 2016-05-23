
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $Site->description() ?>">

<!-- Site Title -->
<title><?php	if($Url->whereAmI()=='post'){echo $Post->title()." – ";}elseif($Url->whereAmI()=='page'){echo $Page->title()." – ";}echo $Site->title();?></title>

<!-- Theme Icons -->
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo HTML_PATH_THEME ?>img/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo HTML_PATH_THEME ?>img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo HTML_PATH_THEME ?>img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo HTML_PATH_THEME ?>img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo HTML_PATH_THEME ?>img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo HTML_PATH_THEME ?>img/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo HTML_PATH_THEME ?>img/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo HTML_PATH_THEME ?>img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo HTML_PATH_THEME ?>img/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo HTML_PATH_THEME ?>img/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo HTML_PATH_THEME ?>img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo HTML_PATH_THEME ?>img/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo HTML_PATH_THEME ?>img/favicon-16x16.png">
<link rel="manifest" href="<?php echo HTML_PATH_THEME ?>img/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo HTML_PATH_THEME ?>img/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<?php

/* ===========================================================
	MONO for Bludit
==============================================================
  MONO by HoundSU (https://hound.su)
  Github: https://github.com/HoundSU/Mono
  Release Date: 2016/04/29
	Version: v1.7
============================================================== */

?>

<!-- Stock CSS and JS -->
<?php
	Theme::css(array(
		'normalize.min.css',
		'highlight.min.css',
		'scss.php?p=main.scss'
	));
  Theme::javascript(array(
    'highlight.pack.js',
    'rainbow.min.js',
    'smooth-scroll.min.js'
  ));
	if( $Url->whereAmI()=='post' ) { Theme::keywords( $Post->tags() ); }
	elseif( $Url->whereAmI()=='page' ) { Theme::keywords( $Page->tags() ); }
?>

<!-- Highlight.js -->
<script>hljs.initHighlightingOnLoad();</script>

<!-- Custom Fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,700italic,800&subset=latin,cyrillic' rel="stylesheet" type="text/css">
<link href='//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css' rel="stylesheet" type="text/css">

<!-- Custom Javascript -->
<script
			  src="//code.jquery.com/jquery-2.2.3.min.js"
			  integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="
			  crossorigin="anonymous">
</script>
<?php Theme::plugins('siteHead') ?>
