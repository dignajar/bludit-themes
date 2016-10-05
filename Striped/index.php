<!DOCTYPE HTML>
<!--
	Striped by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<?php include(PATH_THEME_PHP.'head.php') ?>
	</head>
	<body>

		<!-- Content -->
			<div id="content">
				<div class="inner">

					
			<?php
			    if( ($Url->whereAmI()=='home') || ($Url->whereAmI()=='tag') )
			    {
			        include(PATH_THEME_PHP.'home.php');
			    }
			    elseif($Url->whereAmI()=='post')
			    {
			        include(PATH_THEME_PHP.'post.php');
			    }
			    elseif($Url->whereAmI()=='page')
			    {
			        include(PATH_THEME_PHP.'page.php');
			    }
			?>

				</div>
			</div>

		<!-- Copyright -->
			<div id="sidebar">
			
			<?php include(PATH_THEME_PHP.'sidebar.php') ?></ul>
				
			</div>

		<!-- Scripts -->	
		
		<?php Theme::jquery() ?>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>