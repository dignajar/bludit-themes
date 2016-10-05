<!doctype html>
<html lang="<?php echo $Site->language() ?>">
<head>

<!-- Meta tags -->
<?php include(PATH_THEME_PHP.'head.php') ?>

</head>
<body>
<!-- Plugins Site Body Begin -->
<?php Theme::plugins('siteBodyBegin') ?>

<!-- Layout -->
<!-- Wrapper -->
<div id="wrapper">
	<!-- header -->
	<header id="header">
		<?php include(PATH_THEME_PHP.'sidebar.php') ?>
	</header>

	<!-- Main -->
	<div id="main">
		<?php include(PATH_THEME_PHP.'main.php') ?>
	</div> <!-- End Main -->

	<!-- Footer -->
	<footer id="footer" class="panel">
		<?php include(PATH_THEME_PHP.'footer.php') ?>
	</footer>


</div> <!-- End Wrapper -->

<!-- Plugins Site Body End -->
<?php Theme::plugins('siteBodyEnd') ?>

<!-- Scripts -->
<?php
Theme::javascript('jquery.min.js');
Theme::javascript('jquery.poptrox.min.js');
Theme::javascript('skel.min.js');
Theme::javascript('util.js');
	//if IE <= 8
	if (preg_match('/(?i)msie [5-8]/', $_SERVER['HTTP_USER_AGENT'])) {
		Theme::javascript('respond.min.js');
	}
Theme::javascript('main.js');
?>
</body>
</html>
