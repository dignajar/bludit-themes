<!DOCTYPE html>
<html>
<head>
<!-- Include HTML meta tags -->
<?php include(THEME_DIR_PHP.'head.php') ?>
</head>
<body>
	<div class="grid grid-fluid bodyLayout">
		<!-- Header -->
		<header id="header">
			<!-- Intro -->
			<section id="intro">
				<header>
					<h1><a href="<?php echo $Site->url() ?>"><?php echo $Site->title() ?></a> <span class="slogan"><?php echo $Site->slogan() ?></span>
					<a href="#footer" class="btn-outline nav-link">Pages &amp; Tags</a></h1>
				</header>
			</section>

		<!-- Content -->
		<div id="content" class="grid"> <!-- content id is currently unused -->
			<?php
			    if( ($Url->whereAmI()=='home') || ($Url->whereAmI()=='tag') || ($Url->whereAmI()=='blog') )
			    {
			        include(THEME_DIR_PHP.'home.php');
			    }
			    elseif($Url->whereAmI()=='post')
			    {
			        include(THEME_DIR_PHP.'post.php');
			    }
			    elseif($Url->whereAmI()=='page')
			    {
			        include(THEME_DIR_PHP.'page.php');
			    }
			?>
		</div>

		<!-- Footer  -->
		<section id="footer">
			<?php include(THEME_DIR_PHP.'footer.php') ?>
		</section>

	</div>

	<!-- Scripts! Add Javascript files here if needed. -->

	<!-- Plugins Site Body End -->
	<?php Theme::plugins('siteBodyEnd') ?>

</body>
</html>
