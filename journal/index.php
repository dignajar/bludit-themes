<!DOCTYPE html>
<html lang="en">
<head>
<!-- Include HTML meta tags -->
<?php include(THEME_DIR_PHP.'head.php') ?>
</head>

<body>
	<div class="grid grid-fluid bodyLayout">
		<!-- Header -->
		<header id="intro">
			<span class="nav">
				<a href="<?php echo $Site->url() ?>"><?php echo $Site->title() ?></a>
				<span class="slogan"><?php echo $Site->slogan() ?></span>
				<a data-scroll href="#footer" class="btn-outline nav-link">Pages &amp; Tags</a>
			</span>
		</header>

		<!-- Main Content -->
		<main class="grid">
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
		</main>

		<!-- Footer  -->
		<footer id="footer">
			<?php include(THEME_DIR_PHP.'footer.php') ?>
		</footer>
	</div>

	<!-- Scripts! Add Javascript files here if needed.(Low priority) -->

	<!-- Plugins Site Body End -->
	<?php Theme::plugins('siteBodyEnd') ?>

</body>
</html>
