
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $Site->description() ?>">

<!-- Site Title -->
<title><?php	if($Url->whereAmI()=='post'){echo $Post->title()." – ";}elseif($Url->whereAmI()=='page'){echo $Page->title()." – ";}echo $Site->title();?></title>

<!-- Theme Icons -->
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo HTML_PATH_THEME ?>img/icons/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo HTML_PATH_THEME ?>img/icons/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo HTML_PATH_THEME ?>img/icons/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo HTML_PATH_THEME ?>img/icons/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo HTML_PATH_THEME ?>img/icons/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo HTML_PATH_THEME ?>img/icons/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo HTML_PATH_THEME ?>img/icons/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo HTML_PATH_THEME ?>img/icons/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="f<?php echo HTML_PATH_THEME ?>img/icons/avicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="<?php echo HTML_PATH_THEME ?>img/icons/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="<?php echo HTML_PATH_THEME ?>img/icons/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="<?php echo HTML_PATH_THEME ?>img/icons/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="<?php echo HTML_PATH_THEME ?>img/icons/favicon-128.png" sizes="128x128" />
<meta name="application-name" content="&nbsp;"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="<?php echo HTML_PATH_THEME ?>img/icons/mstile-144x144.png" />
<meta name="msapplication-square70x70logo" content="<?php echo HTML_PATH_THEME ?>img/icons/mstile-70x70.png" />
<meta name="msapplication-square150x150logo" content="<?php echo HTML_PATH_THEME ?>img/icons/mstile-150x150.png" />
<meta name="msapplication-wide310x150logo" content="<?php echo HTML_PATH_THEME ?>img/icons/mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="<?php echo HTML_PATH_THEME ?>img/icons/mstile-310x310.png" />

<?php

/* ===========================================================
	MONO for Bludit
==============================================================
  MONO by HoundSU (https://hound.su/themes/mono)
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
<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

<!-- Custom Javascript -->
<script
			  src="//code.jquery.com/jquery-2.2.3.min.js"
			  integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="
			  crossorigin="anonymous">
</script>
<?php Theme::plugins('siteHead') ?>
