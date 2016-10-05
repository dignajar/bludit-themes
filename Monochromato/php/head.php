<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
	MONOCHROMATO for Bludit
==============================================================
	by hxii (http://paulglushak.com)
	Github: https://github.com/hxii/Monochromato
	Release Date: 2015/11/20
	Version: v0.1
============================================================== */
?>

<?php
	Theme::css(array(
		'normalize.css',
		'highlight.css',
		'scss.php?p=main.scss'
	));
	Theme::javascript('highlight.pack.js');
	Theme::favicon('favicon.png');
	if( $Url->whereAmI()=='post' ) { Theme::keywords( $Post->tags() ); }
	elseif( $Url->whereAmI()=='page' ) { Theme::keywords( $Page->tags() ); }
?>
<script>hljs.initHighlightingOnLoad();</script>
<!-- Custom Fonts -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,700italic,800&subset=latin,cyrillic' rel='stylesheet' type='text/css' rel="stylesheet" type="text/css">
<?php Theme::plugins('siteHead') ?>