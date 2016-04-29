<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $Site->description() ?>">
<title>
  <?php	/* You can change the separator here */
    if( $Url->whereAmI()=='post' ) { echo $Post->title() . " – "; }
    elseif( $Url->whereAmI()=='page' ) { echo $Page->title() . " – "; }
    echo $Site->title();
  ?>
</title>
<?php

/* ===========================================================
	MONOCHROMATO remake MONO for Bludit
==============================================================
	Base by hxii (http://paulglushak.com)
	Github: https://github.com/hxii/Monochromato
  Remake by HoundSU (https://hound.su)
  Github: https://github.com/HoundSU/Mono
  Release Date: 2016/04/29
	Version: v1.0
============================================================== */
?>

<?php
	Theme::css(array(
		'normalize.css',
		'highlight.css',
		'scss.php?p=main.scss'
	));
  Theme::javascript(array(
    'highlight.pack.js',
    'smooth-scroll.min.js',
    'main.min.js'
  ));
	Theme::favicon('favicon.png');
	if( $Url->whereAmI()=='post' ) { Theme::keywords( $Post->tags() ); }
	elseif( $Url->whereAmI()=='page' ) { Theme::keywords( $Page->tags() ); }
?>
<script>hljs.initHighlightingOnLoad();</script>
<!-- Custom Fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,700italic,800&subset=latin,cyrillic' rel='stylesheet' type='text/css' rel="stylesheet" type="text/css">
<link href='//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css' rel='stylesheet' type='text/css' rel="stylesheet" type="text/css">
<!-- Custom Javascript -->
<script src="//code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
<?php Theme::plugins('siteHead') ?>
