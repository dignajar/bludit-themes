<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $Site->title() ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo $Site->description() ?>" />
<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
<meta name="author" content="FREEHTML5.CO and BLUDIT.COM" />

<!--
//////////////////////////////////////////////////////

FREE HTML5 TEMPLATE
DESIGNED & DEVELOPED by FREEHTML5.CO

Website: 		http://freehtml5.co/
Email: 			info@freehtml5.co
Twitter: 		http://twitter.com/fh5co
Facebook: 		https://www.facebook.com/fh5co

//////////////////////////////////////////////////////
-->

<!--
//////////////////////////////////////////////////////

BLUDIT.COM
CMS for blogs and dynamic sites

Website: 		http://bludit.com
Twitter: 		http://twitter.com/bludit
Facebook: 		https://www.facebook.com/bluditcms

//////////////////////////////////////////////////////
-->

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="<?php echo DOMAIN_THEME_IMG.'favicon.ico' ?>">

<!-- Google Webfonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,500' rel='stylesheet' type='text/css'>

<!-- Animate.css -->
<link rel="stylesheet" href="<?php echo DOMAIN_THEME_CSS.'animate.css' ?>">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="<?php echo DOMAIN_THEME_CSS.'icomoon.css' ?>">
<!-- Simple Line Icons -->
<link rel="stylesheet" href="<?php echo DOMAIN_THEME_CSS.'simple-line-icons.css' ?>">
<!-- Theme Style -->
<link rel="stylesheet" href="<?php echo DOMAIN_THEME_CSS.'style.css' ?>">
<!-- Modernizr JS -->
<script src="<?php echo DOMAIN_THEME_JS.'modernizr-2.6.2.min.js' ?>"></script>
<!-- FOR IE9 below -->
<!--[if lt IE 9]>
<script src="<?php echo DOMAIN_THEME_JS.'respond.min.js' ?>"></script>
<![endif]-->

<?php

// Plugins for head
Theme::plugins('siteHead');

?>