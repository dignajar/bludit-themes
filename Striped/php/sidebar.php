<!-- Intro -->
<section id="intro">
		<header>
		<h1 id="logo"><?php echo $Site->title() ?></h1>
		<p><?php echo $Site->description() ?></p>
		<?php include(PATH_THEME_PHP.'head.php') ?>
	</header>
</section>
<nav id="nav">
<ul>
<?php Theme::plugins('siteSidebar') ?>
</ul>
			</nav>
<!-- Footer -->
<ul id="copyright">
	<p class="copyright"><?php echo $Site->footer() ?> <br> Design: <a href="http://html5up.net">HTML5 UP</a></p>
</ul>